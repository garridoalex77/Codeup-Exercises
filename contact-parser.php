<?php

function parseContacts($filename)
{
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
            $personalInfo["number"] = $data;
            array_push($contactList, $personalInfo);
        }

    }

    fclose($handle);
    return $contactList;
}

var_dump(parseContacts('contacts.txt'));
