Timer to animate a panel to slide:

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

Link: https://stackoverflow.com/questions/27724835/animated-panel-in-c-sharp



Center an item in a form using code:

```
{variable name of what you want to center}.Left = (this.{ 'ClientSize' for the form or variable name of what you want to center it in}.Width - {variable name of what you want to center}.Size.Width) / 2;
```

Link: https://stackoverflow.com/questions/4343730/how-do-i-keep-a-label-centered-in-winforms