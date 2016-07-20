<?php

function getContacts($filename) {
    $handle = fopen($filename, 'r');
    $contactList = [];
    clearstatcache();
    $contents = fread($handle, filesize($filename));
    $contents = str_replace("|", "\n", $contents);
    $contacts = explode("\n", $contents);
    foreach ($contacts as $data) {
        if (!is_numeric($data)) {
            $personalInfo = array();
            $personalInfo["name"] = $data;
        } else {
            $data = substr($data, 0, 3) . "-" . substr($data, 3, 3) . "-" . substr($data, 6, 4);
            $personalInfo["number"] = $data;
            array_push($contactList, $personalInfo);
        }
    }
    fclose($handle);
    return $contactList;
}

function addNew($filename) {
    echo 'Enter a name'.PHP_EOL;
    $newName = fgets(STDIN);
    echo 'Enter a number'.PHP_EOL;
    $newNum = substr((fgets(STDIN)), 0, 10);
    $handle = fopen($filename, 'a');
    $newContact = trim($newName) . "|" . trim($newNum).PHP_EOL;
    $contents = fwrite($handle, $newContact);
    fclose($handle);
}

function search($filename) {
    $findMe = fgets(STDIN);
    $handle = fopen($filename, 'r');
    $contents = fread($handle, filesize($filename));
    $found = substr($contents, strpos($contents, trim($findMe)), strlen($findMe) + 11);
    fclose($handle);
    return $found;
}

function delete($filename) {
    echo 'Enter a name to remove: ';
    $findMe = fgets(STDIN);
    $handle = fopen($filename, 'r');
    $contents = fread($handle, filesize($filename));
    fclose($handle);
    $handle = fopen($filename, 'w');
    $deleteMe = substr($contents, strpos($contents, trim($findMe)), strlen($findMe) + 11);
    $contents = str_replace($deleteMe, "", $contents);
    $contents = fwrite($handle, $contents);
    fclose($handle);

}


do {
    echo "
    1. View contacts.
    2. Add a new contact.
    3. Search a contact by name.
    4. Delete a name.
    5. Exit.
    Enter an option (1, 2, 3, 4, 5):".PHP_EOL;

    $option = fgets(STDIN);
    switch ($option) {
        case 1:
            print_r(getContacts('contacts.txt'));
            break;
        case 2:
            addNew('contacts.txt');
            break;
        case 3:
            echo 'Enter a name to Search: ';
            echo "***" . search('contacts.txt') . "***";
            break;
        case 4:
            delete('contacts.txt');
            break;
    }
} while ($option != 5);
