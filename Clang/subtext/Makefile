#
# html -> svg of moodle
#
TOPDIR=../..
PHP=php
V=V1
CPP=$(PHP) $(TOPDIR)/cmd/cppinclude.php
OPTDEFS=
TOMOODLE=$(PHP) $(TOPDIR)/cmd/tomoodle.php
HTMLDIR=HTML
MOODLEDIR=MOODLE
STYLEORIGDIR=$(TOPDIR)/styleorig
INCPATH=-I$(HTMLDIR) -I$(STYLEORIGDIR)
STYLESHTML=$(HTMLDIR)/style.css
STYLESMOODLE=$(MOODLEDIR)/style.css
SVGCOMPONENTS=$(STYLEORIGDIR)/svg_components.svg
SCRIPTORIGDIR=$(TOPDIR)/script
SCRIPTS=$(HTMLDIR)/changepage.js
IMAGEDIR=images
ENCODEDDIR=ENCODED
SED=sed -e '/^\#/d' -e '/^$$/d'

TARGETS= \
	$(HTMLDIR) $(MOODLEDIR) \
	$(SCRIPTS) \
	$(STYLESHTML) $(STYLESMOODLE) \
	$(MOODLEDIR)/pointerarg1.svg \
	$(HTMLDIR)/pointerarg1.html \
	$(MOODLEDIR)/pointerarg1a.svg \
	$(HTMLDIR)/pointerarg1a.html \
	$(MOODLEDIR)/pointerarg2.svg \
	$(HTMLDIR)/pointerarg2.html \
	$(MOODLEDIR)/pointerarg2a.svg \
	$(HTMLDIR)/pointerarg2a.html \
	$(MOODLEDIR)/pointerarg3.svg \
	$(HTMLDIR)/pointerarg3.html \
	$(MOODLEDIR)/pointerarg3a.svg \
	$(HTMLDIR)/pointerarg3a.html \
	$(MOODLEDIR)/pointerarg4.svg \
	$(HTMLDIR)/pointerarg4.html \
	$(MOODLEDIR)/pointerarg4a.svg \
	$(HTMLDIR)/pointerarg4a.html \
	$(HTMLDIR)/index.html

all: $(TARGETS)

$(HTMLDIR): .
	if [ ! -d $(HTMLDIR) ]; then mkdir $(HTMLDIR) ; fi

$(MOODLEDIR): .
	if [ ! -d $(MOODLEDIR) ]; then mkdir $(MOODLEDIR) ; fi

$(MOODLEDIR)/pointerarg1.svg: pointerarg1.html $(STYLESMOODLE) $(SVGCOMPONENTS)
	$(CPP) -D$(V) $(OPTDEFS) $(INCPATH) -DMOODLE $< | $(SED) | $(TOMOODLE) -I$(HTMLDIR) -I$(ENCODEDDIR) -$V > $@

$(HTMLDIR)/pointerarg1.html: pointerarg1.html $(STYLESHTML) $(SVGCOMPONENTS)
	$(CPP) -D$(V) $(OPTDEFS) $(INCPATH) $< | $(SED)  > $@

$(MOODLEDIR)/pointerarg1a.svg: pointerarg1a.html $(STYLESMOODLE) $(SVGCOMPONENTS)
	$(CPP) -D$(V) $(OPTDEFS) $(INCPATH) -DMOODLE $< | $(SED) | $(TOMOODLE) -I$(HTMLDIR) -I$(ENCODEDDIR) -$V > $@

$(HTMLDIR)/pointerarg1a.html: pointerarg1a.html $(STYLESHTML) $(SVGCOMPONENTS)
	$(CPP) -D$(V) $(OPTDEFS) $(INCPATH) $< | $(SED)  > $@

$(MOODLEDIR)/pointerarg2.svg: pointerarg2.html $(STYLESMOODLE) $(SVGCOMPONENTS)
	$(CPP) -D$(V) $(OPTDEFS) $(INCPATH) -DMOODLE $< | $(SED) | $(TOMOODLE) -I$(HTMLDIR) -I$(ENCODEDDIR) -$V > $@

$(HTMLDIR)/pointerarg2.html: pointerarg2.html $(STYLESHTML) $(SVGCOMPONENTS)
	$(CPP) -D$(V) $(OPTDEFS) $(INCPATH) $< | $(SED)  > $@

$(MOODLEDIR)/pointerarg2a.svg: pointerarg2a.html $(STYLESMOODLE) $(SVGCOMPONENTS)
	$(CPP) -D$(V) $(OPTDEFS) $(INCPATH) -DMOODLE $< | $(SED) | $(TOMOODLE) -I$(HTMLDIR) -I$(ENCODEDDIR) -$V > $@

$(HTMLDIR)/pointerarg2a.html: pointerarg2a.html $(STYLESHTML) $(SVGCOMPONENTS)
	$(CPP) -D$(V) $(OPTDEFS) $(INCPATH) $< | $(SED)  > $@

$(MOODLEDIR)/pointerarg3.svg: pointerarg3.html $(STYLESMOODLE) $(SVGCOMPONENTS)
	$(CPP) -D$(V) $(OPTDEFS) $(INCPATH) -DMOODLE $< | $(SED) | $(TOMOODLE) -I$(HTMLDIR) -I$(ENCODEDDIR) -$V > $@

$(HTMLDIR)/pointerarg3.html: pointerarg3.html $(STYLESHTML) $(SVGCOMPONENTS)
	$(CPP) -D$(V) $(OPTDEFS) $(INCPATH) $< | $(SED)  > $@

$(MOODLEDIR)/pointerarg3a.svg: pointerarg3a.html $(STYLESMOODLE) $(SVGCOMPONENTS)
	$(CPP) -D$(V) $(OPTDEFS) $(INCPATH) -DMOODLE $< | $(SED) | $(TOMOODLE) -I$(HTMLDIR) -I$(ENCODEDDIR) -$V > $@

$(HTMLDIR)/pointerarg3a.html: pointerarg3a.html $(STYLESHTML) $(SVGCOMPONENTS)
	$(CPP) -D$(V) $(OPTDEFS) $(INCPATH) $< | $(SED)  > $@

$(MOODLEDIR)/pointerarg4.svg: pointerarg4.html $(STYLESMOODLE) $(SVGCOMPONENTS)
	$(CPP) -D$(V) $(OPTDEFS) $(INCPATH) -DMOODLE $< | $(SED) | $(TOMOODLE) -I$(HTMLDIR) -I$(ENCODEDDIR) -$V > $@

$(HTMLDIR)/pointerarg4.html: pointerarg4.html $(STYLESHTML) $(SVGCOMPONENTS)
	$(CPP) -D$(V) $(OPTDEFS) $(INCPATH) $< | $(SED)  > $@

$(MOODLEDIR)/pointerarg4a.svg: pointerarg4a.html $(STYLESMOODLE) $(SVGCOMPONENTS)
	$(CPP) -D$(V) $(OPTDEFS) $(INCPATH) -DMOODLE $< | $(SED) | $(TOMOODLE) -I$(HTMLDIR) -I$(ENCODEDDIR) -$V > $@

$(HTMLDIR)/pointerarg4a.html: pointerarg4a.html $(STYLESHTML) $(SVGCOMPONENTS)
	$(CPP) -D$(V) $(OPTDEFS) $(INCPATH) $< | $(SED)  > $@

$(HTMLDIR)/index.html: index.html
	sed 's/HTML\///' $< > $@

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
