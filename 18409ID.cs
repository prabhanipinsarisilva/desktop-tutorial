using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace WindowsFormsApp6
{
    public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();
        }

        private void button5_Click(object sender, EventArgs e)
        {
            textBox1.Text = null;
            textBox2.Text = null;
            label4.Text = null;
        }

        private void button1_Click(object sender, EventArgs e)
        {
            float number1, number2;
            number1 = float.Parse(textBox1.Text);
            number2 = float.Parse(textBox2.Text);
            
            label4.Text = (number1 + number2).ToString();
        }

        private void button2_Click(object sender, EventArgs e)
        {
            float number1, number2;
            number1 = float.Parse(textBox1.Text);
            number2 = float.Parse(textBox2.Text);
            
            label4.Text = (number1 - number2).ToString();
        }

        private void button3_Click(object sender, EventArgs e)
        {
            float number1, number2;
            number1 = float.Parse(textBox1.Text);
            number2 = float.Parse(textBox2.Text);
            
            label4.Text = (number1 * number2).ToString();
        }

        private void button4_Click(object sender, EventArgs e)
        {
            float number1, number2;
            number1 = float.Parse(textBox1.Text);
            number2 = float.Parse(textBox2.Text);
            
            label4.Text = (number1 / number2).ToString();
        }
    }
}
