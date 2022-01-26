{} = substitute for proper name

Connect to database using SQL with connection string:

'''
public MySqlConnection connect_to_db()
  {
  MySqlConnection database = new MySqlConnection();
  db.ConnectionString = @"server=localhost; uid=root; database={database name}";
  return db;
  }
'''



SQL statement to add new user to a database:

'''
"INSERT INTO database({item one},{item two},{item three})" + "VALUES (@{item one}, @{item two}, @{item three})";
'''


SQL to insert new data into a table in a database:

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
  
  
  
Access the subroutine to connect to the database from one form to another:

{form 1} - form the subroutine is on
{form 2} - where we want to run it

{form 1} first_form = new {form 1}();
MySqlConnection db = {form 1}.{name of subroutine to connect to database};



SQL command to select details with a specific criteria:
string command = "SELECT * FROM {name of table} WHERE {item in table}=@{external item}";




SQL subroutine to check for existing data:
private Tuple<{data type}, {data type}> check_if_existing_data()
{

bool exists = false;
create_account account = new create_account();
MySqlConnection db = account.Connect_to_db();
MySqlDataReader myDataReader;

string command = "SELECT * FROM user_details WHERE username=@username AND password=@password";


using (db)
{
    MySqlCommand find_user = new MySqlCommand(command, db);
    find_user.Parameters.Add("@username", MySqlDbType.VarChar);
    find_user.Parameters["@username"].Value = username_txt.Text;
    find_user.Parameters.Add("@password", MySqlDbType.VarChar);
    find_user.Parameters["@password"].Value = password_txt.Text;

    try
    {
        db.Open();
        myDataReader = find_user.ExecuteReader();
        if (myDataReader.Read())
        {
            int id = myDataReader.GetInt32(0);
            string username = myDataReader.GetString(1);
            string pass = myDataReader.GetString(2);
            string email = myDataReader["Email"].ToString();
            name = myDataReader.GetString(4);
            Properties.Settings.Default.user_id = id;
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
account.Close();
return Tuple.Create(exists, name);
}
