from django.shortcuts import render

# Create your views here.


def render_page(request, page_name):
    str_args = request.POST.urlencode()
    dict_args = request.POST.dict()
    context = {}

    if page_name == "byeokje_photo":
        img_list = ["files/thumbnails/394/360x300.crop.jpg",
            "files/thumbnails/392/360x300.crop.jpg",
            "files/thumbnails/390/360x300.crop.jpg",
            "files/thumbnails/203/360x300.crop.jpg",
            "files/thumbnails/201/360x300.crop.jpg",
            "files/thumbnails/199/360x300.crop.jpg",
            "files/thumbnails/197/360x300.crop.jpg",
            "files/thumbnails/194/360x300.crop.jpg",
            "files/thumbnails/192/360x300.crop.jpg",
        ]
        context["img_list"] = img_list
    elif page_name == "gimpo_photo":
        img_list = [
            "files/thumbnails/285/360x300.crop.jpg",
            "files/thumbnails/283/360x300.crop.jpg",
            "files/thumbnails/281/360x300.crop.jpg",
            "files/thumbnails/279/360x300.crop.jpg",
            "files/thumbnails/277/360x300.crop.jpg",
            "files/thumbnails/275/360x300.crop.jpg",
        ]
        context["img_list"] = img_list

    return render(request, page_name + '.html', context)