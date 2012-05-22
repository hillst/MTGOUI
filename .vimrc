"Jordan McConnell .vimrc config file
"

"directory is automatically changed to current working file
autocmd BufEnter * execute "chdir ".escape(expand("%:p:h"), ' ')

"remove all trailing white space upon saving and exiting
autocmd BufRead,BufWrite * if ! &bin | silent! %s/\s\+$//ge | endif

"etc commands
set nobackup
set clipboard=unnamed
set autoindent
set nohidden
set number
filetype on
filetype plugin on
syntax enable

"tabs only length of four, dollar sign to show end of line, and spaces instead
"of tabs
set tabstop=4
set shiftwidth=4
set expandtab
set smarttab
set list

"for searching
set ignorecase
set smartcase
set incsearch
set hlsearch

"display possible commands, autocomplete
set wildmenu
set wildmode=list:longest,full

"show the command in the bottom right corner
set showcmd

"lets the mouse be used, only for rare occasions
set mouse=a
set backspace=2

"for folding options
set foldmethod=marker
set foldcolumn=2
set foldlevel=5
syntax on

"I like this color scheme

"stay in normal mode when adding new lines
nnoremap Y y$

"add blank line without changing into insert mode
nnoremap <silent> zj o<Esc>
nnoremap <silent> zk O<Esc>
nnoremap <silent><space> zf

"quickly move to normal mode by typing in jj
inoremap jj <Esc>
nnoremap JJJJ <Nop>

"replace semi-colon with colon for quicker commands
nnoremap ; :
nnoremap : ;

"I use double quotes more often so I switched them with single quote
inoremap ' "
inoremap " '

"easy mapping for pointers only needed for c and cpp
autocmd filetype c,cpp inoremap vv ->

"auto comment generator for c,c++, and c#, might add java in the future!
autocmd filetype c,h,cpp,hpp,cs nnoremap ,, O<Esc>o/*<return><summary></summary><return><param name="" type=""></param><return><return type=""></return><return><remarks></remarks><return><backspace>/<Esc>kkkklllllllllli
"auto comment add new paramter
autocmd filetype c,h,cpp,hpp,cs nnoremap ,p o<param name="" type=""></param><Esc>hhhhhhhhhhhhhhhhhi

"in c, c++, and c# add a new line and tab for {
autocmd filetype c,cpp,cs inoremap {{ <return>{<return><return>}<up><tab>

inoremap "" ""<Left>
inoremap '' ''<Left>
inoremap () ()<Left>
inoremap <> <><Left>
inoremap [] []<Left>
inoremap () ()<Left>
