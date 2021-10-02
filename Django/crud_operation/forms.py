from django import forms
from .models import Employee

class EmployeeForm(forms.ModelForm):
	class Meta:
		model = Employee
		# fields = '__all__'
		fields =('fullname', 'email', 'phoneno', 'position')
		labels = {
			'fullname' : 'Full Name',
			'phoneno' : 'Contact Number' 
		}		

		def __init__(self,*args,**kwargs):
			super(EmployeeForm,self).__init__(*args,**kwargs)
			self.fields['position'].empty_label = "Select"