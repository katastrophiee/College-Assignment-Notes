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
