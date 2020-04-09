from django.shortcuts import render

# Create your views here.


def render_page(request, page_name):
    str_args = request.POST.urlencode()
    dict_args = request.POST.dict()

    return render(request, page_name + '.html', {
        'q': "ha",
    })