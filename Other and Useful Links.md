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
