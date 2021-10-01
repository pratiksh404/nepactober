using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace TestWindowsApp
{
    public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();
        }

        private void button1_Click(object sender, EventArgs e)
        {
            var name = textboxName.Text;
            var address = textboxAddress.Text;
            var age = textboxAge.Text;
            ouptuttext.Text = "My Name is:"+name +". Age is "+ age + ". Address is " + address;
        }

        private void Form1_Load(object sender, EventArgs e)
        {

        }
    }
}
