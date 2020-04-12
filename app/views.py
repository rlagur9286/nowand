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

        # <div id="bd_139_0" class="bd use_np " data-default_style="webzine" data-bdBubble="N" data-bdFilesType="">
        #         <div class="bd_hd clear">
        #             <div class="bd_set fr m_btn_wrp m_no">
        #                 <a class="viewer_with rd_viewer bubble" href="#"
        #                    title="이 버튼을 활성화시키면, 목록에서 게시물 링크를 클릭 시 '뷰어로 보기'로 보게 됩니다."><em>✔</em> <strong>게시물을 뷰어로
        #                     보기</strong></a></div>

        #         </div>
        #         <div class="bd_lst_wrp">
        #             <div class="tl_srch clear">
        #             </div>
        #             <div class="cnb_n_list">
        #             </div>
        #             <ol class="bd_lst bd_zine card card1 img_loadN" data-masonry="_N">
        #                 <li class="clear">
        #                     <div class="rt_area is_tmb">
        #                         <div class="tmb_wrp ribbon_v">
        #                             <img class="tmb"
        #                                  src="{% static "files/thumbnails/394/360x300.crop.jpg?20200330143607.jpg" %}"
        #                                  alt=""/>
        #                         </div>
        #                         <h3 class="ngeb">납골당</h3>
        #                         <div class="info">
        #                         </div>
        #                     </div>
        #                     <a class="hx" href="/byeokje_photo/394"
        #                        data-viewer="/index.php?mid=byeokje_photo&amp;document_srl=394&amp;listStyle=viewer"><span
        #                             class="blind">Read More</span></a>
        #                 </li>
        #                 <li class="clear">
        #                     <div class="rt_area is_tmb">
        #                         <div class="tmb_wrp ribbon_v">
        #                             <img class="tmb"
        #                                  src="{% static "files/thumbnails/392/360x300.crop.jpg?20200330143538.jpg" %}"
        #                                  alt=""/>
        #                         </div>
        #                         <h3 class="ngeb">납골당</h3>
        #                         <div class="info">
        #                         </div>
        #                     </div>
        #                     <a class="hx" href="/byeokje_photo/392"
        #                        data-viewer="/index.php?mid=byeokje_photo&amp;document_srl=392&amp;listStyle=viewer"><span
        #                             class="blind">Read More</span></a>
        #                 </li>
        #                 <li class="clear">
        #                     <div class="rt_area is_tmb">
        #                         <div class="tmb_wrp ribbon_v">
        #                             <img class="tmb"
        #                                  src="http://nowand.org/files/thumbnails/390/360x300.crop.jpg?20200330143503"
        #                                  alt=""/>
        #                         </div>
        #                         <h3 class="ngeb">납골당</h3>
        #                         <div class="info">
        #                         </div>
        #                     </div>
        #                     <a class="hx" href="/byeokje_photo/390"
        #                        data-viewer="/index.php?mid=byeokje_photo&amp;document_srl=390&amp;listStyle=viewer"><span
        #                             class="blind">Read More</span></a>
        #                 </li>
        #                 <li class="clear">
        #                     <div class="rt_area is_tmb">
        #                         <div class="tmb_wrp ribbon_v">

        #                             <img class="tmb"
        #                                  src="http://nowand.org/files/thumbnails/203/360x300.crop.jpg?20200329223138"
        #                                  alt=""/>
        #                         </div>
        #                         <h3 class="ngeb">벽제납골당</h3>
        #                         <div class="info">
        #                         </div>
        #                     </div>
        #                     <a class="hx" href="/byeokje_photo/203"
        #                        data-viewer="/index.php?mid=byeokje_photo&amp;document_srl=203&amp;listStyle=viewer"><span
        #                             class="blind">Read More</span></a>
        #                 </li>
        #                 <li class="clear">
        #                     <div class="rt_area is_tmb">
        #                         <div class="tmb_wrp ribbon_v">

        #                             <img class="tmb"
        #                                  src="http://nowand.org/files/thumbnails/201/360x300.crop.jpg?20200329223125"
        #                                  alt=""/>
        #                         </div>
        #                         <h3 class="ngeb">벽제납골당</h3>
        #                         <div class="info">
        #                         </div>
        #                     </div>
        #                     <a class="hx" href="/byeokje_photo/201"
        #                        data-viewer="/index.php?mid=byeokje_photo&amp;document_srl=201&amp;listStyle=viewer"><span
        #                             class="blind">Read More</span></a>
        #                 </li>
        #                 <li class="clear">
        #                     <div class="rt_area is_tmb">
        #                         <div class="tmb_wrp ribbon_v">

        #                             <img class="tmb"
        #                                  src="http://nowand.org/files/thumbnails/199/360x300.crop.jpg?20200329223112"
        #                                  alt=""/>
        #                         </div>
        #                         <h3 class="ngeb">벽제납골당</h3>
        #                         <div class="info">
        #                         </div>
        #                     </div>
        #                     <a class="hx" href="/byeokje_photo/199"
        #                        data-viewer="/index.php?mid=byeokje_photo&amp;document_srl=199&amp;listStyle=viewer"><span
        #                             class="blind">Read More</span></a>
        #                 </li>
        #                 <li class="clear">
        #                     <div class="rt_area is_tmb">
        #                         <div class="tmb_wrp ribbon_v">

        #                             <img class="tmb"
        #                                  src="http://nowand.org/files/thumbnails/197/360x300.crop.jpg?20200329223151"
        #                                  alt=""/>
        #                         </div>
        #                         <h3 class="ngeb">벽제납골당</h3>
        #                         <div class="info">
        #                         </div>
        #                     </div>
        #                     <a class="hx" href="/byeokje_photo/197"
        #                        data-viewer="/index.php?mid=byeokje_photo&amp;document_srl=197&amp;listStyle=viewer"><span
        #                             class="blind">Read More</span></a>
        #                 </li>
        #                 <li class="clear">
        #                     <div class="rt_area is_tmb">
        #                         <div class="tmb_wrp ribbon_v">
        #                             <img class="tmb"
        #                                  src="http://nowand.org/files/thumbnails/194/360x300.crop.jpg?20200329205728"
        #                                  alt=""/>
        #                         </div>
        #                         <h3 class="ngeb">벽제납골당</h3>
        #                         <div class="info">
        #                         </div>
        #                     </div>
        #                     <a class="hx" href="/byeokje_photo/194"
        #                        data-viewer="/index.php?mid=byeokje_photo&amp;document_srl=194&amp;listStyle=viewer"><span
        #                             class="blind">Read More</span></a>
        #                 </li>
        #                 <li class="clear">
        #                     <div class="rt_area is_tmb">
        #                         <div class="tmb_wrp ribbon_v">

        #                             <img class="tmb"
        #                                  src="http://nowand.org/files/thumbnails/192/360x300.crop.jpg?20200329205728"
        #                                  alt=""/>
        #                         </div>
        #                         <h3 class="ngeb">벽제납골당</h3>
        #                         <div class="info">
        #                         </div>
        #                     </div>
        #                     <a class="hx" href="/byeokje_photo/192"
        #                        data-viewer="/index.php?mid=byeokje_photo&amp;document_srl=192&amp;listStyle=viewer"><span
        #                             class="blind">Read More</span></a>
        #                 </li>
        #             </ol>
        #             <div class="btm_mn clear">
        #                 <div class="fl">
        #                     <a class="btn_img fl" href="/index.php?mid=byeokje_photo&amp;page=1"><i
        #                             class="fa fa-bars"></i> 목록</a>
        #                 </div>
        #                 <div class="fr">
        #                     <a class="btn_img" href="/index.php?mid=byeokje_photo&amp;act=dispBoardWrite"><i
        #                             class="ico_16px write"></i> 쓰기</a></div>
        #             </div>
        #             <form action="./" method="get" class="bd_pg clear"><input type="hidden" name="error_return_url"
        #                                                                       value="/byeokje_photo"/><input
        #                     type="hidden" name="act" value=""/>
        #                 <fieldset>
        #                     <legend class="blind">Board Pagination</legend>
        #                     <input type="hidden" name="vid" value=""/>
        #                     <input type="hidden" name="mid" value="byeokje_photo"/>
        #                     <input type="hidden" name="category" value=""/>
        #                     <input type="hidden" name="search_keyword" value=""/>
        #                     <input type="hidden" name="search_target" value=""/>
        #                     <input type="hidden" name="listStyle" value="webzine"/>
        #                     <strong class="direction"><i class="fa fa-angle-left"></i> Prev</strong> <a
        #                         class="frst_last bubble this" href="/byeokje_photo" title="첫 페이지">1</a>
        #                     <strong class="direction">Next <i class="fa fa-angle-right"></i></strong>
        #                     <div class="bd_go_page tg_cnt2 wrp">
        #                         <button type="button" class="tg_blur2"></button>
        #                         <input type="text" name="page" class="itx"/>/ 1
        #                         <button type="submit" class="bd_btn">GO</button>
        #                         <span class="edge"></span>
        #                         <i class="ie8_only bl"></i><i class="ie8_only br"></i>
        #                         <button type="button" class="tg_blur2"></button>
        #                     </div>
        #                 </fieldset>
        #             </form>
        #         </div>
        #     </div>
    
    return render(request, page_name + '.html', context)