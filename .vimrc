"Jordan McConnell .vimrc config file
"

"directory is automatically changed to current working file
autocmd BufEnter * execute "chdir ".escape(expand("%:p:h"), ' ')

"remove all trailing white space upon saving and exiting
autocmd BufRead,BufWrite * if ! &bin | silent! %s/\s\+$//ge | endif

"just in case set this on
set nocompatible

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

"show the cursor positions all the time
set ruler

nnoremap j gj
nnoremap k gk

nmap <silent> <leader>/ :nohlsearch<cr>
"set the command history to 50
set history=500
"set spaces instead of tabs
set expandtab

set smarttab
set list
"for searching
"ignore the case when searching
set ignorecase

"except when purposely looking for uppercase
set smartcase

"search as you type
set incsearch

"highlight all the results
set hlsearch


"display possible commands, autocomplete
set wildmenu
set wildmode=list:longest,full

"show the command in the bottom right corner
set showcmd

set spell

"lets the mouse be used, only for rare occasions
set mouse=a
set backspace=indent,eol,start

"for folding options
set foldmethod=marker
set foldcolumn=2
set foldlevel=5
syntax on

"I like this color scheme
colorscheme darkblue

autocmd BufWritePre,FileWritePre *   ks|call UpdateTimeStamp()|'s
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

inoremap "" ""<Left>
inoremap '' ''<Left>
inoremap (( ()<Left>
inoremap << <><Left>
inoremap [[ []<Left>
inoremap {{ ()<Left>

vnoremap < <gv
vnoremap > >gv

inoremap <left> <nop>
nnoremap <left> <nop>

inoremap <right> <nop>
nnoremap <right> <nop>

inoremap <up> <nop>
nnoremap <up> <nop>

inoremap <down> <nop>
nnoremap <down> <nop>


vnoremap <tab> >gv
vnoremap <tab> <gv

imap <c-z> <c-o>u

"abbreviation for styling
abbr #b /*****************************************************************
abbr #e *****************************************************************/
if !exists("*TimeStamp")
    fun TimeStamp()
        return "Last Updated: " . strftime("%d/%b/%Y %X")
    endfun
endif

if !exists("*UpdateTimeStamp")
    function! UpdateTimeStamp()
        if &modified == 1
            exec "1"

            let modified_line_no = search("Last Updated:")
            if modified_line_no != 0 && modified_line_no < 10
                exe "s/Last\ Updated: .*/" . TimeStamp()
            endif
        endif
    endfunction
endif
