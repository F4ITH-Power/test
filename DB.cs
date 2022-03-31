using MySql.Data.MySqlClient;
using System;
using System.Collections.Generic;
using System.IO;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace WindowsFormsApp7
{
    public class DB
    {
        MySqlConnection connection = new MySqlConnection("server = localhost; port=3306; username = root; database = main");

        public void openConnection()
        {
            try
            {
                if (connection.State == System.Data.ConnectionState.Closed)
                    connection.Open();
            }
            catch(Exception exc)
            {
                using (StreamWriter sw = new StreamWriter("log.txt", true))
                {
                    sw.WriteLine("Не удалось подключться к серверу " + exc.InnerException.Message);
                }
            }

        }

        public void closeConnection()
        {
            if (connection.State == System.Data.ConnectionState.Open)
                connection.Close();
        }

        public MySqlConnection getConnection()
        {
            return connection;
        }
    }
}
