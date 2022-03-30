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

Remove a function for a button click:

```
{name of button}.Click -= {name of function ran when button is clicked}
```

Remove a function for a button click:

```
{name of button}.Click += {name of function ran when button is clicked}
```

Function for button click example:

```
private void pressed(object sender, EventArgs e)
        {
            this.Hide();
            Form not_goal = new not_goof();
            not_goal.Show();
        }
 ```
 
 dark and light mode:

```
 private void checkBox1_CheckedChanged(object sender, EventArgs e)
        {
            if (checkBox1.Checked == true)
            {
                foreach (Control c in this.Controls)
                {
                    darkmode(c);
                }
            }
            else
            {
                foreach (Control c in this.Controls)
                {
                    lightmode(c);
                }
            }
        }

public void darkmode(Control myControl)
        {
            this.BackColor = Color.Black;
            myControl.BackColor = Color.Black;
            myControl.ForeColor = Color.White;
            foreach (Control subC in myControl.Controls)
            {
                darkmode(subC);
            }
        }

        public void lightmode(Control myControl)
        {
            this.BackColor = Color.White;
            myControl.BackColor = Color.White;
            myControl.ForeColor = Color.Black;
            foreach (Control subC in myControl.Controls)
            {
                lightmode(subC);
            }
        }
```

https://stackoverflow.com/questions/22935285/change-color-of-all-controls-inside-the-form-in-c-sharp
