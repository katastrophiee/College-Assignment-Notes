Connect to database using SQL with connection string:
{} = substitute for proper name


{
MySqlConnection database = new MySqlConnection();
db.ConnectionString = @"server=localhost; uid=root; database={database name}";
return db;
}

SQL statement to add new user to a database:
"INSERT INTO database({item one},{item two},{item three})" + "VALUES (@item one, @item two, @item three)";