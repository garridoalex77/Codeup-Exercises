<?php

function parseContacts($filename)
{
    $contacts = [];
    $contactList = [];
    $handle = fopen($filename, 'r');
    $contents = fread($handle, filesize($filename));
    $contents = str_replace("|", "\n", $contents);
    $contacts = explode("\n", $contents);
    array_pop($contacts);
    foreach ($contacts as $data) {
        if (!is_numeric($data)) {
            $personalInfo = array();
            $pushedName = $personalInfo["name"] = $data;
            array_push($contactList, $pushedName);
        } else {
            $pushedNum = $personalInfo["number"] = $data;
            array_push($contactList, $pushedNum);
            var_dump($personalInfo);
            array_push($contactList, $personalInfo);
        }

    }

    fclose($handle);
    // return $contactList;
}

var_dump(parseContacts('contacts.txt'));
