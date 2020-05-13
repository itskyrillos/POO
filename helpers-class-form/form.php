<?php

class Form
{
    public function openForm($method, $action)
    {
        return '<form method=' . $method . ' action=' . $action . '>';
    }

    public function input()
    {
        return '<input type="text">';
    }

    public function select()
    {
        return '<select name="" id="">select</select>';
    }

    public function submit()
    {
        return '<button type="submit">btn</button>';
    }

    public function textarea()
    {
        return '<textarea name="" id="" cols="30" rows="10"></textarea>';
    }

    public function radio()
    {
        return '<input type="radio" name="" id="">';
    }

    public function checkbox()
    {
        return '<input type="checkbox" name="" id="">';
    }

    public function closeForm()
    {
        return '</form>';
    }
}
