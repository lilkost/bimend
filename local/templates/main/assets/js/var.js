 function heiSectionOne () {
        let height = document.querySelector('.top-page').clientHeight + document.querySelector('.header').clientHeight;
        let picutureSectionOne = document.querySelector('.section-top__inner picture');
        let boxSectionOne = document.querySelector('.section-top__box');

        // oval top styles

        let ovalDecor = document.querySelector('.web-constructor__oval');
        let ovalParent = document.querySelector('.web-constructor__info');
        let ovalLast = document.querySelector('.web-constructor__info-item.--last')
        let ovalTop = (ovalParent.clientHeight - ovalLast.clientHeight) - ovalDecor.clientHeight  / 1.25
        let topPicture = boxSectionOne.clientHeight > 332 ? 332 : boxSectionOne.clientHeight
        // высота линии photo_block ul
        if (document.querySelector('.photo-block')) {
            const lists = document.querySelectorAll('.photo-block__info ul')
            let lineHei = 0;
            let listHei = 0;
            lists.forEach(list=> {
                listHei = list.clientHeight;
                list.querySelectorAll('li').forEach(item=> {
                    lineHei = Number(window.getComputedStyle(item).height.replace('px', ''));
                    Object.assign(list, {
                        style: `--hei-list:${listHei}px; --lineHei: ${lineHei}px`
                    });
                });
            });
        }
        Object.assign(document.documentElement, {
            style:
                `--hei-header: ${height}px;
                --hei-decor: ${document.querySelector('.web-constructor__btn').clientHeight}px;
                --hei-picture: ${picutureSectionOne.clientHeight}px;
                --top-picture: ${topPicture - 30}px;
                --oval-top: ${ovalTop}px;
                `
        });
    }
    heiSectionOne ();
    window.addEventListener('resize', ()=> {
        heiSectionOne ();
    });


 let ro = new ResizeObserver(entries => {
     for (let entry of entries) {
         const cr = entry.contentRect;
         console.log('Element:', entry.target);
         console.log(`Element size: ${cr.width}px x ${cr.height}px`);
         console.log(`Element padding: ${cr.top}px ; ${cr.left}px`);

         Object.assign(document.querySelector('.news'), {
             style: `--hei-news-wrapper:${cr.height}px`
         })
     }
 });

 ro.observe(document.querySelector('.news__item'));