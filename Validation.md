To use Regex:

```
using System.Text.RegularExpressions;
```



Regex to check if value has a number:

```
Regex {variable name for the regex} = new Regex(@"[0-9]+");
```



Regex to check if value has a upper case character:

```
Regex {variable name for the regex} = new Regex(@"[A-Z]+");
```



Regex to check if value has a lower case character:

```
Regex {variable name for the regex} = new Regex(@"[a-z]+");
```



Regex to check if value has a certain amount of characters:

```
Regex {variable name for the regex} = new Regex(@".{0,8}");
```



Regex to check if value consists of only characters:

```
Regex {variable name for the regex} = new Regex("^[a-zA-Z ]+$");
```



Check a variable with regex:

```
bool {variable name} = {regex variable name}.IsMatch({variable to check})
```



To use the email checker:

```
using System.Net.Mail;
```



Check a email is formatted correctly:

```
bool valid = false;
 try
  {
    MailAddress {variable name} = new MailAddress({variable with email to check});
    valid = true;
  }
  catch (FormatException)
  {
    valid = false;
  }
```



Hashing a password: 

Link: https://riptutorial.com/csharp/example/9345/sha512

```
string source = {string you want to hash};
            using (SHA512 sha512Hash = SHA512.Create())
            {
                byte[] sourceBytes = Encoding.UTF8.GetBytes(source);
                byte[] hashBytes = sha512Hash.ComputeHash(sourceBytes);
                string hash = BitConverter.ToString(hashBytes).Replace("-", String.Empty);

                Console.WriteLine("The SHA512 hash of " + source + " is: " + hash);
            }
```
