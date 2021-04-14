<?php
// $myfile = fopen('newfile.blade.php','w') or die('unable to open file');
// $txt = "Bismillahir rahmanir rahim\nthis is first file,\nit's created by me.";
// fwrite($myfile,$txt);
// fclose($myfile);
$names = array(
    "alpaca_basic",
    "alpaca_advanced",
    "alpaca_controls",
    "editor_summernote",
    "editor_ckeditor",
    "widgets_form"
);

$n = count($names);
for ($i=0; $i < $n; $i++) { 
    $myfile = fopen("$names[$i].blade.php","w") or die('unable to open file');
    $txt = "@extends('layouts.master')\n@section('content')\n\n@endsection\n\n@push('plugins')\n\n@endpush\n\n@push('script')\n\n@endpush";
    fwrite($myfile,$txt);
    fclose($myfile);
}
