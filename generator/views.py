from django.shortcuts import render
#from django.http import HttpResponse
import random

def about(request):
    return render(request, 'generator/about.html')

def home(request):
    return render(request, 'generator/home.php')

def password(request):
    characters = list('abcchdefghijklllmnñopqrstuvwxyz')
    generated_pass = ''

    length = int(request.GET.get('length'))

    if request.GET.get('uppercase'):
        characters.extend(list('ABCCHDEFGHIJKLLLMNÑOPQRSTUVWXYZ'))
    if request.GET.get('special'):
        characters.extend(list('!"#$%&()*+,-./:;<=>?@[\]^_`{|}~'))
    if request.GET.get('numbers'):
        characters.extend(list('0123456789'))
    for x in range(length):
        generated_pass += random.choice(characters)

    return render(request, 'generator/password.html', {'password': generated_pass})