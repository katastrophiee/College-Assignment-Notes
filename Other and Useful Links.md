Timer to animate a panel to slide:

Link: https://stackoverflow.com/questions/27724835/animated-panel-in-c-sharp

```
private void {timer variable name}(object sender, EventArgs e)
{
    private int {start location variable name} = {figure out where you want your panel to start from};
    private int {end location variable name} = {figure out where you want your panel to end};      
    private int {how far you want the panel to move each time variable name} = {how far you want the panel to move with each timer tick};   

    if (!{name of panel to animate}.Visible)
    {
        {name of panel to animate}.Left = {start location variable name};
        {name of panel to animate}.Visible = true;
    }

    {name of panel to animate}.Left += {how far you want the panel to move each time variable name};
    if ({name of panel to animate}.Left > {end location variable name}) {name of panel to animate}.Left = {end location variable name};

    if ({name of panel to animate}.Left == {end location variable name})
    {
        {timer variable name}.Enabled = false;
        {timer variable name}.Stop();
    }            
}
```



Center an item in a form using code:

Link: https://stackoverflow.com/questions/4343730/how-do-i-keep-a-label-centered-in-winforms

```
{variable name of what you want to center}.Left = (this.{ 'ClientSize' for the form or variable name of what you want to center it in}.Width - {variable name of what you want to center}.Size.Width) / 2;
```



Change button image using code:

Link:https://stackoverflow.com/questions/1789967/how-to-programmatically-change-the-background-image-on-form-c-sharp

```
{button variable name}.BackgroundImage = new Bitmap(@"{file location of the image you want to change it to});
```



Set a web browsers URL:

```
{web browser variable name}.Navigate("{url for the website}");
{web browser variable name}.ScriptErrorsSuppressed = true;
```



Set minimun and maximum dates for a date time picker:

```
booking_date.MaxDate = DateTime.Today.AddMonths({amount of months you want to allow});
booking_date.MinDate = DateTime.Today;
```



Check item on a drop down list:

```
{name of drop down list}.SelectedIndex == {index of item you want to check for}
```



Show and hide password using button click:

Link: https://stackoverflow.com/questions/8185747/how-can-i-unmask-password-text-box-and-mask-it-back-to-password

```
shown = false {variable with false as password is hidden at the start}

{when buttons pressed}
shown = !shown; {inverts the value}
if (open == true)
{
    {button variable name}.UseSystemPasswordChar = false;
    {button variable name}.PasswordChar = '\0';
}
else
{
    {button variable name}.PasswordChar = '*';
}
```



Open HTML link using default browser:

Link: https://stackoverflow.com/questions/10989709/open-a-html-file-using-default-web-browser

```
System.Diagnostics.Process.Start({file path of your html link});
```




Connect two forms using form inheritance:

Link: https://docs.microsoft.com/en-us/dotnet/desktop/winforms/advanced/how-to-inherit-windows-forms?view=netframeworkdesktop-4.8

```
public class {name of form you want to inherit it} : {name space}.{name of the form you want to inherit from}
```

Screen Sizes:

```
1980, 1080
1280, 720
16 by 9 display, no scaling atm - ease of development - can be made to scale as its standard resolution
iterative testing
```

Dynaically making a label using a text file:

```
private void pog()
        {
            string readText = File.ReadAllText("H:/Documents/T-LEVEL/stealing_resources_for_educational_purposes.txt");
            Size lblsize = new Size(1280, 10000000);
            Label lbl = new Label();
            //lbl.AutoSize = true;
            lbl.Location = new Point(0, 0);
            lbl.Size = lblsize;
            lbl.Text = readText;
            lbl.Font = new Font("Microsoft Sans Serif", 14, FontStyle.Underline);
            lbl.BackColor = Color.Transparent;
            this.Controls.Add(lbl);
            lbl.BringToFront();
        }
```

Read first line of text file:

Link: https://stackoverflow.com/questions/27345854/read-only-first-line-from-a-text-file
```
using System.Linq; 
string line1 = File.ReadLines("MyFile.txt").First(); // gets the first line from file.
```

https://stackoverflow.com/questions/4672978/how-to-autosize-the-height-of-a-label-but-not-the-width


Pass a value to a button click:

Link:https://stackoverflow.com/questions/4815629/how-do-i-pass-variables-to-a-buttons-event-method

```
//adding the click to the button
 {button name}.Click += (sender, EventArgs) =>
                {
                    {name of button click function}(sender, EventArgs, {item you want to pass});
                };
                
//subroutine for the button click function
void {name of button click function}(object sender, EventArgs e, string {item you want to pass})
        {
            //code you want to do in button click 
        }
```
