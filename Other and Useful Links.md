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
