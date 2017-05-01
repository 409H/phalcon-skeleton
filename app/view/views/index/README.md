## app/view/views/index/

* This directory holds all views used by the `IndexController`.

## app/view/views/index/index.volt

* This file is the view that will be autopicked by Phalcon when the `IndexAction` is called on the `IndexController`.

For each action that requires a view, there should be a `<<action_name>>.volt` file for it.

From the controller action calling the `index.volt` file, the view is compiled like;

![https://github.com/409H/phalcon-skeleton/blob/master/public/assets/images/ViewPreview.PNG?raw=true](https://github.com/409H/phalcon-skeleton/blob/master/public/assets/images/ViewPreview.PNG?raw=true)

## app/view/views/index/about.volt

* This file is the view that will be autopicked by Phalcon when then `AboutAction` is called on the `IndexController`.