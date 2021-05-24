#
# html -> svg of moodle
#
PHP=php
V=V1
CPP=$(PHP) ../cmd/cppinclude.php
OPTDEFS=
TOMOODLE=$(PHP) ../cmd/tomoodle.php
HTMLDIR=HTML
MOODLEDIR=MOODLE
STYLEORIGDIR=../styleorig
INCPATH=-I$(HTMLDIR) -I$(STYLEORIGDIR)
STYLESHTML=$(HTMLDIR)/style.css
STYLESMOODLE=$(MOODLEDIR)/style.css
SVGCOMPONENTS=$(STYLEORIGDIR)/svg_components.svg
SCRIPTORIGDIR=../script
SCRIPTS=$(HTMLDIR)/changepage.js
IMAGEDIR=images
ENCODEDDIR=ENCODED
SED=sed -e '/^\#/d' -e '/^$$/d'

TARGETS= \
	$(HTMLDIR) $(MOODLEDIR) \
	$(SCRIPTS) \
	$(STYLESHTML) $(STYLESMOODLE) \
	$(MOODLEDIR)/quiz.svg \
	$(HTMLDIR)/quiz.html \
	$(MOODLEDIR)/index.svg \
	$(HTMLDIR)/index.html

all: $(TARGETS)

$(HTMLDIR): .
	if [ ! -d $(HTMLDIR) ]; then mkdir $(HTMLDIR) ; fi

$(MOODLEDIR): .
	if [ ! -d $(MOODLEDIR) ]; then mkdir $(MOODLEDIR) ; fi

$(MOODLEDIR)/quiz.svg: quiz.html $(STYLESMOODLE) $(SVGCOMPONENTS)
	$(CPP) -D$(V) $(OPTDEFS) $(INCPATH) -DMOODLE $< | $(SED) | $(TOMOODLE) -I$(HTMLDIR) -I$(ENCODEDDIR) -$V > $@

$(HTMLDIR)/quiz.html: quiz.html $(STYLESHTML) $(SVGCOMPONENTS)
	$(CPP) -D$(V) $(OPTDEFS) $(INCPATH) $< | $(SED)  > $@

$(MOODLEDIR)/index.svg: index.html $(STYLESMOODLE) $(SVGCOMPONENTS)
	$(CPP) -D$(V) $(OPTDEFS) $(INCPATH) -DMOODLE $< | $(SED) | $(TOMOODLE) -I$(HTMLDIR) -I$(ENCODEDDIR) -$V > $@

$(HTMLDIR)/index.html: index.html $(STYLESHTML) $(SVGCOMPONENTS)
	$(CPP) -D$(V) $(OPTDEFS) $(INCPATH) $< | $(SED)  > $@


#
# style
#
$(STYLESHTML): $(STYLEORIGDIR)/style_orig.css
	$(CPP) -D$(V) $(OPTDEFS) $< > $@

$(STYLESMOODLE): $(STYLEORIGDIR)/style_orig.css
	$(CPP) -D$(V) $(OPTDEFS) $< > $@

#
# Javascript
#
$(SCRIPTS): $(SCRIPTORIGDIR)/changepage.js
	cp -a $< $@

clean:
	rm -fr $(HTMLDIR)/* $(MOODLEDIR)/* $(ENCODEDDIR)/*.b64
