<?php

function parseContacts($filename) {
    $contactList = [];
    $contacts = [];
    $handle = fopen($filename, 'r');
    $contents = fread($handle, filesize($filename));
    $contents = str_replace("|", "\n", $contents);
    $contacts = explode("\n", $contents);
    array_pop($contacts);
    foreach ($contacts as $data) {
        if (!is_numeric($data)) {
            $personalInfo = array();
            $personalInfo["name"] = $data;
        } else {
            var_dump($data);
            $data = substr($data, 0, 3) . "-" . substr($data, 3, 3) . "-" . substr($data, 6, 4);
            $personalInfo["number"] = $data;
            array_push($contactList, $personalInfo);
        }
    }
    fclose($handle);
    return $contactList;
}
var_dump(parseContacts('contacts.txt'));
