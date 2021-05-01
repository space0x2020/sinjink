#
# html -> svg of moodle
#
PHP=php
V=V1
CPP=$(PHP) ../cmd/cppinclude.php
#CPP=cpp
SED=cat
#SED=sed -e '/^\#/d' -e '/^$$/d'
TOMOODLE=$(PHP) ../cmd/tomoodle.php
TOBASE64=../cmd/tobase64.sh
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

TARGETS= \
	$(HTMLDIR) $(MOODLEDIR) $(ENCODEDDIR) \
	$(STYLESHTML) $(STYLESMOODLE) \
	$(SCRIPTS) \
	$(MOODLEDIR)/samplestyles.svg \
	$(HTMLDIR)/samplestyles.html \
	$(HTMLDIR)/index.html

all: $(TARGETS)

$(HTMLDIR): .
	if [ ! -d $(HTMLDIR) ]; then mkdir $(HTMLDIR) ; fi

$(MOODLEDIR): .
	if [ ! -d $(MOODLEDIR) ]; then mkdir $(MOODLEDIR) ; fi

$(ENCODEDDIR): .
	if [ ! -d $(ENCODEDDIR) ]; then mkdir $(ENCODEDDIR) ; fi

#samplestyles.html: $(STYLESMOODLE) $(SVGCOMPONENTS)
#	awk -f mksamplehtml.awk  $(SVGCOMPONENTS) > $@

$(MOODLEDIR)/samplestyles.svg: samplestyles.html $(STYLESMOODLE) $(SVGCOMPONENTS)
	$(CPP) -D$(V) $(INCPATH) -DMOODLE $< | $(SED) | $(TOMOODLE) -I$(HTMLDIR) -I$(ENCODEDDIR) -$V > $@

$(HTMLDIR)/samplestyles.html: samplestyles.html $(STYLESHTML) $(SVGCOMPONENTS)
	$(CPP) -D$(V) $(INCPATH) $< | $(SED)  > $@

$(HTMLDIR)/index.html: index.html
	sed 's/HTML\///' $< > $@

#
# style
#
$(STYLESHTML): $(STYLEORIGDIR)/style_orig.css
	$(CPP) -D$(V) $< | $(SED) > $@

$(STYLESMOODLE): $(STYLEORIGDIR)/style_orig.css
	$(CPP) -D$(V) $< | $(SED) > $@

#
# Javascript
#
$(SCRIPTS): $(SCRIPTORIGDIR)/changepage.js
	cp -a $< $@


clean:
	rm -fr $(HTMLDIR)/* $(MOODLEDIR)/* $(ENCODEDDIR)/*.b64 samplesvgs.html
