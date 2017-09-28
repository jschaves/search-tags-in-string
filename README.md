# search_Tags_In_String
This class searches in the document or in a url the repeats of the chosen tag and displays it in json format.

<pre>
//Example
$query = new searchTagsInString();
$query->search_in = file_get_contents('https://www.egeon.es');
$query->tag = 'img';

header('Content-type: application/json');
echo $query->ReturnData();
</pre>
