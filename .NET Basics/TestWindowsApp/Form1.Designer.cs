namespace TestWindowsApp
{
    partial class Form1
    {
        /// <summary>
        /// Required designer variable.
        /// </summary>
        private System.ComponentModel.IContainer components = null;

        /// <summary>
        /// Clean up any resources being used.
        /// </summary>
        /// <param name="disposing">true if managed resources should be disposed; otherwise, false.</param>
        protected override void Dispose(bool disposing)
        {
            if (disposing && (components != null))
            {
                components.Dispose();
            }
            base.Dispose(disposing);
        }

        #region Windows Form Designer generated code

        /// <summary>
        /// Required method for Designer support - do not modify
        /// the contents of this method with the code editor.
        /// </summary>
        private void InitializeComponent()
        {
            this.button1 = new System.Windows.Forms.Button();
            this.label1 = new System.Windows.Forms.Label();
            this.textboxName = new System.Windows.Forms.TextBox();
            this.ouptuttext = new System.Windows.Forms.Label();
            this.label2 = new System.Windows.Forms.Label();
            this.textboxAge = new System.Windows.Forms.TextBox();
            this.label3 = new System.Windows.Forms.Label();
            this.textboxAddress = new System.Windows.Forms.TextBox();
            this.SuspendLayout();
            // 
            // button1
            // 
            this.button1.Location = new System.Drawing.Point(207, 140);
            this.button1.Name = "button1";
            this.button1.Size = new System.Drawing.Size(75, 23);
            this.button1.TabIndex = 0;
            this.button1.Text = "Save";
            this.button1.UseVisualStyleBackColor = true;
            this.button1.Click += new System.EventHandler(this.button1_Click);
            // 
            // label1
            // 
            this.label1.AutoSize = true;
            this.label1.Location = new System.Drawing.Point(147, 60);
            this.label1.Name = "label1";
            this.label1.Size = new System.Drawing.Size(38, 13);
            this.label1.TabIndex = 1;
            this.label1.Text = "Name:";
            // 
            // textboxName
            // 
            this.textboxName.Location = new System.Drawing.Point(207, 53);
            this.textboxName.Name = "textboxName";
            this.textboxName.Size = new System.Drawing.Size(206, 20);
            this.textboxName.TabIndex = 2;
            // 
            // ouptuttext
            // 
            this.ouptuttext.AutoSize = true;
            this.ouptuttext.Location = new System.Drawing.Point(225, 103);
            this.ouptuttext.Name = "ouptuttext";
            this.ouptuttext.Size = new System.Drawing.Size(39, 13);
            this.ouptuttext.TabIndex = 3;
            this.ouptuttext.Text = "Output";
            // 
            // label2
            // 
            this.label2.AutoSize = true;
            this.label2.Location = new System.Drawing.Point(150, 86);
            this.label2.Name = "label2";
            this.label2.Size = new System.Drawing.Size(35, 13);
            this.label2.TabIndex = 4;
            this.label2.Text = "label2";
            // 
            // textboxAge
            // 
            this.textboxAge.Location = new System.Drawing.Point(207, 86);
            this.textboxAge.Name = "textboxAge";
            this.textboxAge.Size = new System.Drawing.Size(206, 20);
            this.textboxAge.TabIndex = 5;
            // 
            // label3
            // 
            this.label3.AutoSize = true;
            this.label3.Location = new System.Drawing.Point(476, 59);
            this.label3.Name = "label3";
            this.label3.Size = new System.Drawing.Size(45, 13);
            this.label3.TabIndex = 6;
            this.label3.Text = "Address";
            // 
            // textboxAddress
            // 
            this.textboxAddress.Location = new System.Drawing.Point(531, 52);
            this.textboxAddress.Name = "textboxAddress";
            this.textboxAddress.Size = new System.Drawing.Size(202, 20);
            this.textboxAddress.TabIndex = 7;
            // 
            // Form1
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(6F, 13F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.ClientSize = new System.Drawing.Size(800, 450);
            this.Controls.Add(this.textboxAddress);
            this.Controls.Add(this.label3);
            this.Controls.Add(this.textboxAge);
            this.Controls.Add(this.label2);
            this.Controls.Add(this.ouptuttext);
            this.Controls.Add(this.textboxName);
            this.Controls.Add(this.label1);
            this.Controls.Add(this.button1);
            this.Name = "Form1";
            this.Text = "Form1";
            this.Load += new System.EventHandler(this.Form1_Load);
            this.ResumeLayout(false);
            this.PerformLayout();

        }

        #endregion

        private System.Windows.Forms.Button button1;
        private System.Windows.Forms.Label label1;
        private System.Windows.Forms.TextBox textboxName;
        private System.Windows.Forms.Label ouptuttext;
        private System.Windows.Forms.Label label2;
        private System.Windows.Forms.TextBox textboxAge;
        private System.Windows.Forms.Label label3;
        private System.Windows.Forms.TextBox textboxAddress;
    }
}

