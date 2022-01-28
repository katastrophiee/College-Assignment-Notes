Hide current form and open new one:

```
this.Hide()
Form {next form to open} = new {form name}();
{next form to open}.Show();
```



Close current form and look for running form to show:

```
this.Close();
foreach ({running form name to show} form in Application.OpenForms)
{
form.Show();
break;
}
```



Close form and open new one:

```
this.Close();
Form {next form to open} = new {form name}();
{next form to show}.Show();
```



Change an item on an already running form when closing the current one:

```
this.Close();

foreach ({variable name of running form you want to show next} form in Application.OpenForms)
{
    if (form is {variable name of running form you want to show next})
    {
        form.{variable name of item you want to edit}.{what you want to change} = {what you're changing it to};
        form.Show();
        break;
    }
}
```
