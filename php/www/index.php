<?php
/*
 * This is the controller.
 *
 * Running this file in browser should launch the project.
 */
require_once "includes/main.php";
require_once "models/model.php";

class Bookmark
{
    function start()
    {
        try
        {
            $model = new BookmarkModel();

            //Create
            if (isset($_POST['create']))
            {
                if (isset($_POST['name']) and isset($_POST['link']))
                {
                    $model->addBookmark($_POST['name'], $_POST['link']);
                }
                else
                {
                    render('view',array(
                                    'title' => 'Bookmark Manager',
                                    'header' => 'Create Bookmark',
                                    'innerview' => 'create'
                    ));
                    return;
                }
            }

            //Edit
            if (isset($_POST['edit']))
            {
                if (isset($_POST['save']) and isset($_POST['name']) and isset($_POST['link']))
                {
                    $bookmark = $model->editBookmark($_POST['edit'], $_POST['name'], $_POST['link']);
                }
                else if (!isset($_POST['cancel']))
                {
                    $bookmark = $model->getBookmarkById($_POST['edit']);
                    render('view',array(
                                    'title' => 'Bookmark Manager',
                                    'header' => 'Edit Bookmark',
                                    'bookmark' => $bookmark,
                                    'innerview' => 'edit'
                    ));
                    return;
                }
            }

            //Delete
            if (isset($_POST['delete']))
            {
                $model->deleteBookmark($_POST['delete']);
            }

            //Select
            $bookMarks = $model->getBookmark();
            render('view', array(
                            'title' => 'Bookmark Manager',
                            'header' => 'Browsing Bookmarks',
                            'bookMarks' => $bookMarks,
                            'innerview' => 'list'
            ));
        }
        catch(Exception $e)
        {
            render('error',array('message'=>$e->getMessage()));
        }
    }
}

$bookmark = new Bookmark();
$bookmark->start();
