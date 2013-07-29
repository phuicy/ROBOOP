.PHONY : all

all : faq.pdf faq/faq.html

%.pdf : %.tex
	pdflatex $*
	pdflatex $*

faq/faq.html : faq.tex faq.pdf
	latex2html -split 0 -no_navigation $<
	cp faq/faq.html ../website
	cp ../website/roboop.css ../website/faq.css
	cat faq/faq.css >> ../website/faq.css

