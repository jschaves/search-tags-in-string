# search_Tags_In_String
This class searches in the document or in a url the repeats of the chosen tag and displays it in json format.

<pre>
//Example
$query = new searchTagsInString();
$query->search_in = file_get_contents('https://www.egeon.es');
$query->tag = array('img', 'h2');
header('Content-type: application/json');
echo $query->ReturnData();

//result
0	"&lt;img src=\"/sites/all/themes/anchor/img/twitter-top25.png\" width=\"135\" height=\"37\" border=\"0\" alt=\"Top 25 Language Twitterers 2014\"&gt;"
1	"&lt;img src=\"https://www.egeon.es/sites/default/files/styles/servicios/public/Fotolia_90241958_XS.jpg?itok=w7iD2dxi\" width=\"820\" height=\"193\" alt=\"hacemos en egeon\" title=\"hacemos en egeon\"&gt;"
2	"&lt;img alt=\"Adquiera un img :	
	0 : "&lt;img src=\"/sites/all/themes/anchor/img/twitter-top25.png\" width=\"135\" height=\"37\" border=\"0\" alt=\"Top 25 Language Twitterers 2014\">"
	1 : "&lt;img src=\"https://www.egeon.es/sites/default/files/styles/servicios/public/Fotolia_90241958_XS.jpg?itok=w7iD2dxi\" width=\"820\" height=\"193\" alt=\"hacemos en egeon\" title=\"hacemos en egeon\">"
	2 : "&lt;img alt=\"Adquiera un de nombre de dominio\" src=\"/sites/default/files/dominios_hosting.png\" title=\"Adquiera un de nombre de dominio\">"
	3 : "&lt;img alt=\"Adquiera alojamiento web\" src=\"/sites/default/files/hosting2.png\" title=\"Adquiera alojamiento web\">"
	4 : "&lt;img alt=\"Adquiera certificados SSL\" src=\"/sites/default/files/certificados_hosting.png\" title=\"Adquiera certificados SSL\">"
	5 : "&lt;img alt=\"Adquiera correo electrónico para su empresa\" src=\"/sites/default/files/emails-hosting.png\" title=\"Adquiera correo electrónico para su empresa\">"
	6 : "&lt;img alt=\"demo correo electrónico para su empresa\" src=\"/sites/default/files/demo.png\" title=\"demo correo electrónico para su empresa\">"
	7 : "&lt;img src=\"/sites/all/themes/anchor/img/e-redonda15x15b.png\" alt=\"imagen e redonda\">"
h2 : 
	0 : "&lt;h2 class=\"mega\"> eGeon&lt;/h2>"
	1 : "&lt;h2 class=\"element-invisible\">Formulario de búsqueda&lt;/h2>\n"
	2 : "&lt;h2>Menú principal&lt;/h2>\n"
	3 : "&lt;h2>Tags&lt;/h2>\n"
	4 : "&lt;h2>Últimos tweets&lt;/h2>\n"
	5 : "&lt;h2>Dónde estamos&lt;/h2>\n"
	6 : "&lt;h2>Redes sociales&lt;/h2>\n"de nombre de dominio\" src=\"/sites/default/files/dominios_hosting.png\" title=\"Adquiera un de nombre de dominio\"&gt;"
3	"&lt;img alt=\"Adquiera alojamiento web\" src=\"/sites/default/files/hosting2.png\" title=\"Adquiera alojamiento web\"&gt;"
4	"&lt;img alt=\"Adquiera certificados SSL\" src=\"/sites/default/files/certificados_hosting.png\" title=\"Adquiera certificados SSL\"&gt;"
5	"&lt;img alt=\"Adquiera correo electrónico para su empresa\" src=\"/sites/default/files/emails-hosting.png\" title=\"Adquiera correo electrónico para su empresa\"&gt;"
6	"&lt;img alt=\"demo correo electrónico para su empresa\" src=\"/sites/default/files/demo.png\" title=\"demo correo electrónico para su empresa\"&gt;"
7	"&lt;img src=\"/sites/all/themes/anchor/img/e-redonda15x15b.png\" alt=\"imagen e redonda\"&gt;"
</pre>

