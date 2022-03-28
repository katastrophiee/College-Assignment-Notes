{} = substitute for proper name

To use the Sql features:
```
using MySql.Data.MySqlClient;
```

Connect to database using SQL with connection string:

```
public MySqlConnection connect_to_db()
  {
  MySqlConnection database = new MySqlConnection();
  db.ConnectionString = @"server=localhost; uid=root; database={database name}";
  return database;
  }
```



SQL statement to add new user to a database:

```
"INSERT INTO database({item one},{item two},{item three})" + "VALUES (@{item one}, @{item two}, @{item three})";
```


SQL to insert new data into a table in a database:

```
private void add_data()
  {
  MySqlConnection db = connect_to_db(); 
  string command = {sql command}
  
  using (db)
    {
    MySqlCommand add_data = new MySqlCommand(command, db);
    add_data.Parameters.Add("@{item one}", MySqlDbType.VarChar);
    add_data.Parameters["@{item one}"].Value = {value you want to add to database}
    
    try
    {
      database.Open();
      add_data.ExecuteReader();
      database.Close();
    }
    catch (Exception ex)
    {
      MessageBox.Show(ex.Message);
    }
    finally
    {
      if(database == null)
      {
        MessageBox.Show(Failed);
      }
    }
  }
}
```

  
  
Access the subroutine to connect to the database from one form to another:

{form 1} - form the subroutine is on
{form 2} - where we want to run it

```
{form 1} first_form = new {form 1}();
MySqlConnection db = {form 1}.{name of subroutine to connect to database};
```



To run it:

```
{form 1} first_form = new {form 1}();
MySqlConnection db = {form 1}.connect_to_db();
MySqlDataReader myDataReader;
```

SQL command to select details with a specific criteria:

```
string command = "SELECT * FROM {name of table} WHERE {item in table}=@{external item}";
```




SQL subroutine to check for existing data:

```
private Tuple<{data type}, {data type}> check_if_existing_data()
{

bool exists = false;
int number = 0;
string word = "";
MySqlConnection db = connect_to_db();

string command = "{sql statement}";


using (db)
{
    MySqlCommand find_user = new MySqlCommand(command, db);
    find_user.Parameters.Add("@{item one}", MySqlDbType.VarChar);
    find_user.Parameters["@{item one}"].Value = {value to check for in the database};

    try
    {
        db.Open();
        MySqlDataReader myDataReader = find_user.ExecuteReader();
        if (myDataReader.Read())
        {
            number = myDataReader.GetInt32({index of item});
            word = myDataReader.GetString({index of item});
            exists = true; 
        }
        myDataReader.Close();
        db.Close();
    }
    catch (Exception ex)
    {
        MessageBox.Show(ex.Message);
    }
}
return Tuple.Create(number, word);
}
```



Get tuple after returning it from a subroutine:

```
Tuple <{data type}, {data type}> tuple_one = check_if_existing_data();
```



Get a count of an item in a database using an SQL statement:

```
mySqlConnection {variable name for your connection} = connect_to_db();
string {variable name for your sql command} = "SELECT COUNT({item you want to count}) FROM {table name} WHERE {item you're comparing it to in the database} = '" + {variable name of item to compare to in program} + "';";

using (variable name for your connection)
{
  MySqlCommand {variable name for your command} = new MySqlCommand({variable name for your sql command}, {variable name for your connection});
  {variable name for your connection}.Open();
  using({variable name for your command})
  {
    int {variable name for your count} = Convert.ToInt32({variable name for your command}.ExecuteScalar());
  }
  {variable name for your connection}.Close();
}
```

Count:

```
private bool check_inputs()
        {
            int matches_found = -1;
            bool exists = false;
            MySqlConnection db = Connect_to_db();
            MySqlDataReader myDataReader;
            string command = "SELECT count(code) FROM students WHERE code=@code";


            using (db)
            {
                MySqlCommand check_user = new MySqlCommand(command, db);
                check_user.Parameters.Add("@code", MySqlDbType.Int32);
                check_user.Parameters["@code"].Value = Convert.ToInt32(textBox1.Text);

                try
                {
                    db.Open();
                    myDataReader = check_user.ExecuteReader();
                    if (myDataReader.Read())
                    {
                        matches_found = myDataReader.GetInt32(0);
                    }
                    if (matches_found > 0)
                    {
                        MessageBox.Show("This code is already in use!");
                    }

                    myDataReader.Close();
                    db.Close();
                }
                catch (Exception ex)
                {
                    MessageBox.Show(ex.Message);
                }
            }

            return exists;
        }
```

User Friendly:

```
try
{

}
catch (MySqlException ex)
{
    int errorcode = ex.Number;
}
```

Test:

```
 private Tuple<List<string>, List<double>> get_points()
        {
            int test_score = 0;
            string test_date = "";
            MySqlConnection db = connect_to_db();

            string command = "SELECT dateOfTest, score FROM tests WHERE studentUsername=@username ORDER BY dateOfTest asc";

            List<string> date = new List<string>();
            List<double> score = new List<double>();

            using (db)
            {
                MySqlCommand find_user = new MySqlCommand(command, db);
                find_user.Parameters.Add("@username", MySqlDbType.VarChar);
                find_user.Parameters["@username"].Value = "david";

                try
                {
                    db.Open();
                    MySqlDataReader myDataReader = find_user.ExecuteReader();
                    while (myDataReader.Read())
                    {
                        test_date = myDataReader.GetString(0);
                        test_score = myDataReader.GetInt32(1);
                        date.Add(test_date);
                        score.Add(test_score);
                    }
                    myDataReader.Close();
                    db.Close();
                }
                catch (Exception ex)
                {
                    MessageBox.Show(ex.Message);
                }
            }
            return Tuple.Create(date, score);
        }

        public MySqlConnection connect_to_db()
        {
            MySqlConnection db = new MySqlConnection();
            db.ConnectionString = @"server=localhost; uid=root; database=gidjohn_tutoring";
            return db;
        }

        private void grapgh()
        {

            var tuple = get_points();
            List<string> dates = tuple.Item1;
            List<double> scores = tuple.Item2;
            string[] x_axis = dates.ToArray();
            double[] points = scores.ToArray();

            //foreach (string item in dates)
            //{
            //    x_axis.Append(item);
            //    MessageBox.Show(item);
            //}
            //foreach (int item in scores)
            //{
            //    points.Append(item);
            //    MessageBox.Show(item);
            //}

            double[] ys1 = points;
        

        // clear old curves
        zedGraphControl1.GraphPane.CurveList.Clear();

        // plot the data as curves
        var curve1 = zedGraphControl1.GraphPane.AddCurve(null, null, ys1, Color.Blue);
        curve1.Line.IsAntiAlias = true;
        curve1.Symbol.IsVisible = false;

            
            zedGraphControl1.GraphPane.XAxis.Type = ZedGraph.AxisType.Text;
            zedGraphControl1.GraphPane.XAxis.Scale.TextLabels = x_axis;


            // style the plot
            zedGraphControl1.GraphPane.Title.Text = $"Line graph for Adam";
        zedGraphControl1.GraphPane.XAxis.Title.Text = "Date";
        zedGraphControl1.GraphPane.YAxis.Title.Text = "Score";

        // auto-axis and update the display
        zedGraphControl1.GraphPane.XAxis.ResetAutoScale(zedGraphControl1.GraphPane, CreateGraphics());
        zedGraphControl1.GraphPane.YAxis.ResetAutoScale(zedGraphControl1.GraphPane, CreateGraphics());
        zedGraphControl1.Refresh();
        }
```
