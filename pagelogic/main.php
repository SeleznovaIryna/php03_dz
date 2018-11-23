<?php
function mainPage() {
    include DOCROOT . '/datafiles/maindata.php';

    echo renderViewsWithTemplate('content','template',maindata());
}

function contactsPage(){
    include DOCROOT . '/datafiles/contactsdata.php';

    echo renderViewsWithTemplate('contacts','contacts',contactsdata());
}

function contentPage()
{
    include DOCROOT . '/datafiles/contentdata.php';

    echo renderViewsWithTemplate('content', 'content', contentdata());
}

function photosPage()
{
    include DOCROOT . '/datafiles/photodata.php';

    echo renderViewsWithTemplate('content', 'photos', photodata());
}