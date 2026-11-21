@php
$loc=app()->getLocale();
$items=[
['jobs','/jobs',['ar'=>'وظائف المغرب','es'=>'Empleo en Marruecos','fr'=>'Emploi au Maroc','en'=>'Jobs in Morocco'],['ar'=>'عروض العمل المحلية وشروط التقديم.','es'=>'Ofertas locales y requisitos.','fr'=>'Offres locales et conditions.','en'=>'Local vacancies and application requirements.']],
['companies','/companies',['ar'=>'شركات النقل بالمغرب','es'=>'Empresas de Marruecos','fr'=>'Entreprises au Maroc','en'=>'Moroccan transport companies'],['ar'=>'دليل الشركات ومواقعها الرسمية.','es'=>'Directorio y sitios oficiales.','fr'=>'Annuaire et sites officiels.','en'=>'Company directory and official websites.']],
['spain-companies','/spain-companies',['ar'=>'شركات النقل الإسبانية','es'=>'Empresas de transporte en España','fr'=>'Transporteurs en Espagne','en'=>'Transport companies in Spain'],['ar'=>'الشركات وروابط التقديم الرسمية.','es'=>'Empresas y canales oficiales.','fr'=>'Entreprises et canaux officiels.','en'=>'Companies and official application channels.']],
['spain-jobs','/spain-jobs',['ar'=>'وظائف إسبانيا','es'=>'Empleo en España','fr'=>'Emploi en Espagne','en'=>'Jobs in Spain'],['ar'=>'الفرص ومتطلبات العمل القانوني.','es'=>'Ofertas y requisitos legales.','fr'=>'Offres et conditions légales.','en'=>'Vacancies and lawful work requirements.']],
['europe-jobs','/europe-jobs',['ar'=>'وظائف أوروبا','es'=>'Empleo en Europa','fr'=>'Emploi en Europe','en'=>'Jobs across Europe'],['ar'=>'معلومات وفرص للسائقين في أوروبا.','es'=>'Información y oportunidades.','fr'=>'Informations et opportunités.','en'=>'Information and opportunities for drivers.']],
['canada-jobs','/canada-jobs',['ar'=>'العمل في كندا','es'=>'Trabajar en Canadá','fr'=>'Travailler au Canada','en'=>'Working in Canada'],['ar'=>'العروض الرسمية وتصاريح العمل والرخص.','es'=>'Ofertas, permisos y licencias.','fr'=>'Offres, permis et licences.','en'=>'Official vacancies, permits and licensing.']],
['training','/training',['ar'=>'أكاديمية السائق المحترف','es'=>'Academia del conductor','fr'=>'Académie du conducteur','en'=>'Professional Driver Academy'],['ar'=>'دروس السلامة والفحص والقيادة.','es'=>'Lecciones de seguridad y conducción.','fr'=>'Cours de sécurité et conduite.','en'=>'Lessons in safety, inspection and driving.']],
['for-companies','/for-companies',['ar'=>'للشركات وأصحاب العمل','es'=>'Para empresas','fr'=>'Pour les entreprises','en'=>'For transport companies'],['ar'=>'طلب نشر عرض عمل أو إعلان تجاري.','es'=>'Solicite publicar una oferta o anuncio.','fr'=>'Demandez la publication d’une offre.','en'=>'Request a vacancy listing or company ad.']]
];
$titles=['ar'=>'تابع إلى القسم المناسب لك','es'=>'Continúe hacia la sección que necesita','fr'=>'Accédez à la rubrique qui vous intéresse','en'=>'Continue to the section you need'];
$intro=['ar'=>'روابط مباشرة بين الوظائف والشركات والتكوين ومعلومات العمل بالخارج.','es'=>'Accesos directos a empleo, empresas, formación y trabajo en el extranjero.','fr'=>'Accès direct aux emplois, entreprises, formations et au travail à l’étranger.','en'=>'Quick links to jobs, companies, training and working abroad.'];
@endphp
<section class="edj-pathways" aria-label="Related sections">
<div class="edj-pathways-head"><h2>{{ $titles[$loc] ?? $titles['en'] }}</h2><p>{{ $intro[$loc] ?? $intro['en'] }}</p></div>
<div class="edj-pathways-grid">
@foreach($items as $item)
@unless(request()->is($item[0]))
<a class="edj-pathway" href="{{ $item[1] }}"><strong>{{ $item[2][$loc] ?? $item[2]['en'] }}</strong><span>{{ $item[3][$loc] ?? $item[3]['en'] }}</span><span class="edj-pathway-more">{{ $loc==='ar'?'استكشف القسم ←':($loc==='es'?'Ver sección →':($loc==='fr'?'Voir la rubrique →':'Explore section →')) }}</span></a>
@endunless
@endforeach
</div></section>
<style>
.edj-pathways{max-width:1050px;margin:34px auto;padding:26px 20px;background:#f1f6fb;border:1px solid #dce8f3;border-radius:18px;box-sizing:border-box}
.edj-pathways-head{text-align:center;margin:0 auto 18px;max-width:720px}
.edj-pathways-head h2{margin:0 0 6px;color:#123b5d;font-size:clamp(21px,3vw,27px)}
.edj-pathways-head p{margin:0;color:#536779;line-height:1.7}
.edj-pathways-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(205px,1fr));gap:12px}
.edj-pathway{display:flex;flex-direction:column;gap:7px;min-height:128px;padding:16px;background:#fff;border:1px solid #dbe5ee;border-radius:13px;text-decoration:none;color:#18364f;transition:transform .18s ease,box-shadow .18s ease}
.edj-pathway:hover{transform:translateY(-2px);box-shadow:0 6px 16px rgba(20,55,85,.1)}
.edj-pathway strong{font-size:16px;color:#123b5d}.edj-pathway span{font-size:14px;line-height:1.55;color:#5b6d7c}.edj-pathway .edj-pathway-more{margin-top:auto;font-weight:700;color:#14649b}
@media(max-width:600px){.edj-pathways{margin:24px 12px;padding:20px 14px}.edj-pathways-grid{grid-template-columns:1fr 1fr;gap:9px}.edj-pathway{padding:13px;min-height:145px}.edj-pathway strong{font-size:15px}.edj-pathway span{font-size:13px}}
</style>