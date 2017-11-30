<?php
/*
 * This is the model.
 */
class BookmarkModel
{
    function getBookmark()
    {
        $rows = array();
        $res = CreateQuery('SELECT * FROM bookmarks ORDER BY Name');

        while ($row = mysqli_fetch_object($res))
        {
            $rows[] = $row;
        }
        return  $rows;
    }

    function getBookmarkById($id)
    {
        $rows = array();
        $res = CreateQuery("SELECT * FROM bookmarks where id = $id");

        while ($row = mysqli_fetch_object($res))
        {
            return $row;
        }
        return  false;
    }

    function addBookmark($name, $link)
    {
        $rows = array();
        $query = "INSERT INTO bookmarks (`Name`, `Link`) VALUES ('$name', '$link')";
        $res = CreateQuery($query);

        if (!$res)
        {
            throw new Exception("Failed to create bookmark");
        }
    }

    function deleteBookmark($id)
    {
        $rows = array();
        $query = "delete from bookmarks where id = $id";
        $res = CreateQuery($query);

        if (!$res)
        {
            throw new Exception("Failed to Delete bookmark");
        }
    }

    function editBookmark($id, $name, $link)
    {
        $rows = array();
        $query = "update bookmarks Set `Name` = '$name', `Link` = '$link' where id = $id";
        $res = CreateQuery($query);

        if (!$res)
        {
            throw new Exception("Failed to Update bookmark");
        }
    }
}
