<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>طلبات الشركات</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background: #f5f5f5;
            color: #222;
        }

        .container {
            max-width: 900px;
            margin: auto;
        }

        h1 {
            text-align: center;
        }

        .top-actions {
            text-align: center;
            margin-bottom: 20px;
        }

        .request {
            background: #fff;
            padding: 18px;
            margin-bottom: 20px;
            border-radius: 12px;
            box-shadow: 0 2px 8px rgba(0,0,0,.08);
        }

        .request p {
            line-height: 1.7;
        }

        .finance {
            margin-top: 20px;
            padding: 15px;
            background: #f0f4f8;
            border-radius: 10px;
        }

        .finance h2 {
            margin-top: 0;
        }

        .finance-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 12px;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        input, select, textarea {
            width: 100%;
            box-sizing: border-box;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 7px;
            font-size: 16px;
        }

        textarea {
            min-height: 90px;
        }

        .full {
            grid-column: 1 / -1;
        }

        button {
            padding: 11px 18px;
            border: 0;
            border-radius: 8px;
            cursor: pointer;
            font-size: 16px;
        }

        .logout {
            background: #333;
            color: #fff;
        }

        .save {
            background: #b8860b;
            color: #fff;
            margin-top: 12px;
        }

        .remaining {
            margin-top: 12px;
            padding: 10px;
            background: #fff;
            border-radius: 7px;
            font-weight: bold;
        }

        @media (max-width: 600px) {
            body {
                padding: 10px;
            }

            .finance-grid {
                grid-template-columns: 1fr;
            }

            .full {
                grid-column: auto;
            }
        }
    </style>
</head>
<body>
<div class="container">

    <h1>طلبات الشركات</h1>

    <div class="top-actions">
        <form method="POST" action="{{ route('gallery.logout') }}">
            @csrf
            <button type="submit" class="logout">تسجيل الخروج</button>
        </form>
    </div>

    @if($requests->isEmpty())
        <p>لا توجد طلبات حاليًا.</p>
    @else

        @foreach($requests as $request)
            <div class="request">

                <p><strong>الشركة:</strong> {{ $request->company }}</p>
                <p><strong>المسؤول:</strong> {{ $request->contact }}</p>
                <p><strong>الهاتف:</strong> {{ $request->phone }}</p>
                <p><strong>البريد:</strong> {{ $request->email }}</p>
                <p><strong>الرسالة:</strong> {{ $request->message }}</p>
                <p><strong>حالة الطلب:</strong> {{ $request->status }}</p>
                <p><strong>تاريخ الطلب:</strong> {{ $request->created_at }}</p>

                <div class="finance">
                    <h2>💰 الإدارة المالية والإعلان</h2>

                    <form method="POST" action="/admin/company-requests/{{ $request->id }}">
                        @csrf
                        @method('PUT')

                        <div class="finance-grid">

                            <div>
                                <label>ثمن الإعلان (DH)</label>
                                <input type="number"
                                       name="advertising_price"
                                       step="0.01"
                                       min="0"
                                       value="{{ $request->advertising_price }}">
                            </div>

                            <div>
                                <label>المبلغ المدفوع (DH)</label>
                                <input type="number"
                                       name="amount_paid"
                                       step="0.01"
                                       min="0"
                                       value="{{ $request->amount_paid }}">
                            </div>

                            <div>
                                <label>حالة الأداء</label>
                                <select name="payment_status">
                                    <option value="unpaid" {{ $request->payment_status === 'unpaid' ? 'selected' : '' }}>غير مدفوع</option>
                                    <option value="partial" {{ $request->payment_status === 'partial' ? 'selected' : '' }}>مدفوع جزئيًا</option>
                                    <option value="paid" {{ $request->payment_status === 'paid' ? 'selected' : '' }}>مدفوع بالكامل</option>
                                </select>
                            </div>

                            <div>
                                <label>حالة الطلب</label>
                                <select name="status">
                                    <option value="pending" {{ $request->status === 'pending' ? 'selected' : '' }}>قيد المراجعة</option>
                                    <option value="approved" {{ $request->status === 'approved' ? 'selected' : '' }}>مقبول</option>
                                    <option value="rejected" {{ $request->status === 'rejected' ? 'selected' : '' }}>مرفوض</option>
                                    <option value="completed" {{ $request->status === 'completed' ? 'selected' : '' }}>مكتمل</option>
                                </select>
                            </div>

                            <div>
                                <label>بداية الإعلان</label>
                                <input type="date"
                                       name="ad_start_date"
                                       value="{{ $request->ad_start_date }}">
                            </div>

                            <div>
                                <label>نهاية الإعلان</label>
                                <input type="date"
                                       name="ad_end_date"
                                       value="{{ $request->ad_end_date }}">
                            </div>

                            <div class="full">
                                <label>ملاحظات الإدارة</label>
                                <textarea name="admin_notes">{{ $request->admin_notes }}</textarea>
                            </div>

                        </div>

                        <div class="remaining">
                            المتبقي:
                            {{ number_format(max(0, (float)$request->advertising_price - (float)$request->amount_paid), 2) }}
                            DH
                        </div>

                        <button type="submit" class="save">💾 حفظ البيانات المالية</button>
                    </form>
                </div>

            </div>
        @endforeach

    @endif

</div>
</body>
</html>
