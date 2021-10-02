from django.shortcuts import render,redirect
from .forms import EmployeeForm
from .models import Employee

# Create your views here.
def index(request):
	if request.method == 'GET':
		employee = EmployeeForm()
		return render(request,'form.html',{'employee' : employee})
	else:
		employee = EmployeeForm(request.POST)
		if employee.is_valid:
			employee.save()
		return redirect('/list')

def list(request):
	employee = Employee.objects.all()
	return render(request,'list.html',{'employee':employee})

