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

IMGFILES= \
	$(HTMLDIR)/1401-2-A.jpg \
	$(ENCODEDDIR)/1401-2-A.b64 \
	$(HTMLDIR)/1502-A.jpg \
	$(ENCODEDDIR)/1502-A.b64 \
	$(HTMLDIR)/1503-A.jpg \
	$(ENCODEDDIR)/1503-A.b64 \
	$(HTMLDIR)/1-2-9.png \
	$(ENCODEDDIR)/1-2-9.b64 \
	$(HTMLDIR)/sd-formula175.png \
	$(ENCODEDDIR)/sd-formula175.b64 \
	$(HTMLDIR)/formula_sd.png \
	$(ENCODEDDIR)/formula_sd.b64 \
	$(HTMLDIR)/arraybox.png \
	$(ENCODEDDIR)/arraybox.b64 \
	$(HTMLDIR)/varboxt.png \
	$(ENCODEDDIR)/varboxt.b64 \
	$(HTMLDIR)/rei-ittei.gif \
	$(ENCODEDDIR)/rei-ittei.b64 \
	$(HTMLDIR)/rei-random.gif \
	$(ENCODEDDIR)/rei-random.b64

TARGETS= \
	$(HTMLDIR) $(MOODLEDIR) $(ENCODEDDIR) \
	$(STYLESHTML) $(STYLESMOODLE) \
	$(SCRIPTS) \
	$(IMGFILES) \
	$(MOODLEDIR)/addressing.svg \
	$(HTMLDIR)/addressing.html \
	$(MOODLEDIR)/binarynum.svg \
	$(HTMLDIR)/binarynum.html \
	$(MOODLEDIR)/bnf.svg \
	$(HTMLDIR)/bnf.html \
	$(MOODLEDIR)/clock.svg \
	$(HTMLDIR)/clock.html \
	$(MOODLEDIR)/complement.svg \
	$(HTMLDIR)/complement.html \
	$(MOODLEDIR)/cpucycle.svg \
	$(HTMLDIR)/cpucycle.html \
	$(MOODLEDIR)/encrypt.svg \
	$(HTMLDIR)/encrypt.html \
	$(MOODLEDIR)/flipflopcircuit.svg \
	$(HTMLDIR)/flipflopcircuit.html \
	$(MOODLEDIR)/floatingpoint.svg \
	$(HTMLDIR)/floatingpoint.html \
	$(MOODLEDIR)/fploss.svg \
	$(HTMLDIR)/fploss.html \
	$(MOODLEDIR)/harddisk.svg \
	$(HTMLDIR)/harddisk.html \
	$(MOODLEDIR)/interrupt.svg \
	$(HTMLDIR)/interrupt.html \
	$(MOODLEDIR)/javavm.svg \
	$(HTMLDIR)/javavm.html \
	$(MOODLEDIR)/maskopration.svg \
	$(HTMLDIR)/maskopration.html \
	$(MOODLEDIR)/mathematics.svg \
	$(HTMLDIR)/mathematics.html \
	$(MOODLEDIR)/polishnotation.svg \
	$(HTMLDIR)/polishnotation.html \
	$(MOODLEDIR)/reliability.svg \
	$(HTMLDIR)/reliability.html \
	$(MOODLEDIR)/shiftoperation.svg \
	$(HTMLDIR)/shiftoperation.html \
	$(MOODLEDIR)/software.svg \
	$(HTMLDIR)/software.html \
	$(MOODLEDIR)/sramdramcache.svg \
	$(HTMLDIR)/sramdramcache.html \
	$(MOODLEDIR)/taskquiz.svg \
	$(HTMLDIR)/taskquiz.html \
	$(MOODLEDIR)/virtualaddress.svg \
	$(HTMLDIR)/virtualaddress.html \
	$(MOODLEDIR)/waitqueue.svg \
	$(HTMLDIR)/waitqueue.html \
	$(MOODLEDIR)/shorcutkey.svg \
	$(HTMLDIR)/shorcutkey.html \
	$(HTMLDIR)/index.html

all: $(TARGETS)

$(HTMLDIR): .
	if [ ! -d $(HTMLDIR) ]; then mkdir $(HTMLDIR) ; fi

$(MOODLEDIR): .
	if [ ! -d $(MOODLEDIR) ]; then mkdir $(MOODLEDIR) ; fi

$(ENCODEDDIR): .
	if [ ! -d $(ENCODEDDIR) ]; then mkdir $(ENCODEDDIR) ; fi

$(MOODLEDIR)/addressing.svg: addressing.html $(STYLESMOODLE) $(SVGCOMPONENTS)
	$(CPP) -D$(V) $(INCPATH) -DMOODLE $< | $(SED) | $(TOMOODLE) -I$(HTMLDIR) -I$(ENCODEDDIR) -$V > $@

$(HTMLDIR)/addressing.html: addressing.html $(STYLESHTML) $(SVGCOMPONENTS)
	$(CPP) -D$(V) $(INCPATH) $< | $(SED)  > $@

$(MOODLEDIR)/binarynum.svg: binarynum.html $(STYLESMOODLE) $(SVGCOMPONENTS)
	$(CPP) -D$(V) $(INCPATH) -DMOODLE $< | $(SED) | $(TOMOODLE) -I$(HTMLDIR) -I$(ENCODEDDIR) -$V > $@

$(HTMLDIR)/binarynum.html: binarynum.html $(STYLESHTML) $(SVGCOMPONENTS)
	$(CPP) -D$(V) $(INCPATH) $< | $(SED) > $@

$(MOODLEDIR)/bnf.svg: bnf.html $(STYLESMOODLE) $(SVGCOMPONENTS)
	$(CPP) -D$(V) $(INCPATH) -DMOODLE $< | $(SED) | $(TOMOODLE) -I$(HTMLDIR) -I$(ENCODEDDIR) -$V > $@

$(HTMLDIR)/bnf.html: bnf.html $(STYLESHTML) $(SVGCOMPONENTS)
	$(CPP) -D$(V) $(INCPATH) $< | $(SED) > $@

$(MOODLEDIR)/clock.svg: clock.html $(STYLESMOODLE) $(SVGCOMPONENTS)
	$(CPP) -D$(V) $(INCPATH) -DMOODLE $< | $(SED) | $(TOMOODLE) -I$(HTMLDIR) -I$(ENCODEDDIR) -$V > $@

$(HTMLDIR)/clock.html: clock.html $(STYLESHTML) $(SVGCOMPONENTS)
	$(CPP) -D$(V) $(INCPATH) $< | $(SED) > $@

$(MOODLEDIR)/dbpractice_2_2.svg: dbpractice_2_2.html $(STYLESMOODLE) $(SVGCOMPONENTS)
	$(CPP) -D$(V) $(INCPATH) -DMOODLE $< | $(SED) | $(TOMOODLE) -I$(HTMLDIR) -I$(ENCODEDDIR) -$V > $@

$(HTMLDIR)/dbpractice_2_2.html: dbpractice_2_2.html $(STYLESHTML) $(SVGCOMPONENTS)
	$(CPP) -D$(V) $(INCPATH) $< | $(SED) > $@

$(MOODLEDIR)/complement.svg: complement.html $(STYLESMOODLE) $(SVGCOMPONENTS)
	$(CPP) -D$(V) $(INCPATH) -DMOODLE $< | $(SED) | $(TOMOODLE) -I$(HTMLDIR) -I$(ENCODEDDIR) -$V > $@

$(HTMLDIR)/complement.html: complement.html $(STYLESHTML) $(SVGCOMPONENTS)
	$(CPP) -D$(V) $(INCPATH) $< | $(SED) > $@

$(MOODLEDIR)/cpucycle.svg: cpucycle.html $(STYLESMOODLE) $(SVGCOMPONENTS)
	$(CPP) -D$(V) $(INCPATH) -DMOODLE $< | $(SED) | $(TOMOODLE) -I$(HTMLDIR) -I$(ENCODEDDIR) -$V > $@

$(HTMLDIR)/cpucycle.html: cpucycle.html $(STYLESHTML) $(SVGCOMPONENTS)
	$(CPP) -D$(V) $(INCPATH) $< | $(SED) > $@

$(MOODLEDIR)/encrypt.svg: encrypt.html $(STYLESMOODLE) $(SVGCOMPONENTS)
	$(CPP) -D$(V) $(INCPATH) -DMOODLE $< | $(SED) | $(TOMOODLE) -I$(HTMLDIR) -I$(ENCODEDDIR) -$V > $@

$(HTMLDIR)/encrypt.html: encrypt.html $(STYLESHTML) $(SVGCOMPONENTS)
	$(CPP) -D$(V) $(INCPATH) $< | $(SED) > $@

$(MOODLEDIR)/flipflopcircuit.svg: flipflopcircuit.html $(STYLESMOODLE) $(SVGCOMPONENTS)
	$(CPP) -D$(V) $(INCPATH) -DMOODLE $< | $(SED) | $(TOMOODLE) -I$(HTMLDIR) -I$(ENCODEDDIR) -$V > $@

$(HTMLDIR)/flipflopcircuit.html: flipflopcircuit.html $(STYLESHTML) $(SVGCOMPONENTS)
	$(CPP) -D$(V) $(INCPATH) $< | $(SED) > $@

$(MOODLEDIR)/floatingpoint.svg: floatingpoint.html $(STYLESMOODLE) $(SVGCOMPONENTS)
	$(CPP) -D$(V) $(INCPATH) -DMOODLE $< | $(SED) | $(TOMOODLE) -I$(HTMLDIR) -I$(ENCODEDDIR) -$V > $@

$(HTMLDIR)/floatingpoint.html: floatingpoint.html $(STYLESHTML) $(SVGCOMPONENTS)
	$(CPP) -D$(V) $(INCPATH) $< | $(SED) > $@

$(MOODLEDIR)/fploss.svg: fploss.html $(STYLESMOODLE) $(SVGCOMPONENTS)
	$(CPP) -D$(V) $(INCPATH) -DMOODLE $< | $(SED) | $(TOMOODLE) -I$(HTMLDIR) -I$(ENCODEDDIR) -$V > $@

$(HTMLDIR)/fploss.html: fploss.html $(STYLESHTML) $(SVGCOMPONENTS)
	$(CPP) -D$(V) $(INCPATH) $< | $(SED) > $@

$(MOODLEDIR)/harddisk.svg: harddisk.html $(STYLESMOODLE) $(SVGCOMPONENTS)
	$(CPP) -D$(V) $(INCPATH) -DMOODLE $< | $(SED) | $(TOMOODLE) -I$(HTMLDIR) -I$(ENCODEDDIR) -$V > $@

$(HTMLDIR)/harddisk.html: harddisk.html $(STYLESHTML) $(SVGCOMPONENTS)
	$(CPP) -D$(V) $(INCPATH) $< | $(SED) > $@

$(MOODLEDIR)/interrupt.svg: interrupt.html $(STYLESMOODLE) $(SVGCOMPONENTS)
	$(CPP) -D$(V) $(INCPATH) -DMOODLE $< | $(SED) | $(TOMOODLE) -I$(HTMLDIR) -I$(ENCODEDDIR) -$V > $@

$(HTMLDIR)/interrupt.html: interrupt.html $(STYLESHTML) $(SVGCOMPONENTS)
	$(CPP) -D$(V) $(INCPATH) $< | $(SED) > $@

$(MOODLEDIR)/javavm.svg: javavm.html $(STYLESMOODLE) $(SVGCOMPONENTS)
	$(CPP) -D$(V) $(INCPATH) -DMOODLE $< | $(SED) | $(TOMOODLE) -I$(HTMLDIR) -I$(ENCODEDDIR) -$V > $@

$(HTMLDIR)/javavm.html: javavm.html $(STYLESHTML) $(SVGCOMPONENTS)
	$(CPP) -D$(V) $(INCPATH) $< | $(SED) > $@

$(MOODLEDIR)/maskopration.svg: maskopration.html $(STYLESMOODLE) $(SVGCOMPONENTS)
	$(CPP) -D$(V) $(INCPATH) -DMOODLE $< | $(SED) | $(TOMOODLE) -I$(HTMLDIR) -I$(ENCODEDDIR) -$V > $@

$(HTMLDIR)/maskopration.html: maskopration.html $(STYLESHTML) $(SVGCOMPONENTS)
	$(CPP) -D$(V) $(INCPATH) $< | $(SED) > $@

$(MOODLEDIR)/mathematics.svg: mathematics.html $(STYLESMOODLE) $(SVGCOMPONENTS)
	$(CPP) -D$(V) $(INCPATH) -DMOODLE $< | $(SED) | $(TOMOODLE) -I$(HTMLDIR) -I$(ENCODEDDIR) -$V > $@

$(HTMLDIR)/mathematics.html: mathematics.html $(STYLESHTML) $(SVGCOMPONENTS)
	$(CPP) -D$(V) $(INCPATH) $< | $(SED) > $@

$(MOODLEDIR)/polishnotation.svg: polishnotation.html $(STYLESMOODLE) $(SVGCOMPONENTS)
	$(CPP) -D$(V) $(INCPATH) -DMOODLE $< | $(SED) | $(TOMOODLE) -I$(HTMLDIR) -I$(ENCODEDDIR) -$V > $@

$(HTMLDIR)/polishnotation.html: polishnotation.html $(STYLESHTML) $(SVGCOMPONENTS)
	$(CPP) -D$(V) $(INCPATH) $< | $(SED) > $@

$(MOODLEDIR)/reliability.svg: reliability.html $(STYLESMOODLE) $(SVGCOMPONENTS)
	$(CPP) -D$(V) $(INCPATH) -DMOODLE $< | $(SED) | $(TOMOODLE) -I$(HTMLDIR) -I$(ENCODEDDIR) -$V > $@

$(HTMLDIR)/reliability.html: reliability.html $(STYLESHTML) $(SVGCOMPONENTS)
	$(CPP) -D$(V) $(INCPATH) $< | $(SED) > $@

$(MOODLEDIR)/shiftoperation.svg: shiftoperation.html $(STYLESMOODLE) $(SVGCOMPONENTS) $(ENCODEDDIR)/1-2-9.b64
	$(CPP) -D$(V) $(INCPATH) -DMOODLE $< | $(SED) | $(TOMOODLE) -I$(HTMLDIR) -I$(ENCODEDDIR) -$V > $@

$(HTMLDIR)/shiftoperation.html: shiftoperation.html $(STYLESHTML) $(SVGCOMPONENTS)
	$(CPP) -D$(V) $(INCPATH) $< | $(SED) > $@

$(MOODLEDIR)/software.svg: software.html $(STYLESMOODLE) $(SVGCOMPONENTS) $(ENCODEDDIR)/varboxt.b64 $(ENCODEDDIR)/arraybox.b64
	$(CPP) -D$(V) $(INCPATH) -DMOODLE $< | $(SED) | $(TOMOODLE) -I$(HTMLDIR) -I$(ENCODEDDIR) -$V > $@

$(HTMLDIR)/software.html: software.html $(STYLESHTML) $(SVGCOMPONENTS)
	$(CPP) -D$(V) $(INCPATH) $< | $(SED) > $@

$(MOODLEDIR)/sramdramcache.svg: sramdramcache.html $(STYLESMOODLE) $(SVGCOMPONENTS) $(ENCODEDDIR)/1401-2-A.b64
	$(CPP) -D$(V) $(INCPATH) -DMOODLE $< | $(SED) | $(TOMOODLE) -I$(HTMLDIR) -I$(ENCODEDDIR) -$V > $@

$(HTMLDIR)/sramdramcache.html: sramdramcache.html $(STYLESHTML) $(SVGCOMPONENTS)
	$(CPP) -D$(V) $(INCPATH) $< | $(SED) > $@

$(MOODLEDIR)/taskquiz.svg: taskquiz.html $(STYLESMOODLE) $(SVGCOMPONENTS) $(ENCODEDDIR)/1502-A.b64 $(ENCODEDDIR)/1503-A.b64
	$(CPP) -D$(V) $(INCPATH) -DMOODLE $< | $(SED) | $(TOMOODLE) -I$(HTMLDIR) -I$(ENCODEDDIR) -$V > $@

$(HTMLDIR)/taskquiz.html: taskquiz.html $(STYLESHTML) $(SVGCOMPONENTS)
	$(CPP) -D$(V) $(INCPATH) $< | $(SED) > $@

$(MOODLEDIR)/virtualaddress.svg: virtualaddress.html $(STYLESMOODLE) $(SVGCOMPONENTS)
	$(CPP) -D$(V) $(INCPATH) -DMOODLE $< | $(SED) | $(TOMOODLE) -I$(HTMLDIR) -I$(ENCODEDDIR) -$V > $@

$(HTMLDIR)/virtualaddress.html: virtualaddress.html $(STYLESHTML) $(SVGCOMPONENTS)
	$(CPP) -D$(V) $(INCPATH) $< | $(SED) > $@

$(MOODLEDIR)/waitqueue.svg: waitqueue.html $(STYLESMOODLE) $(SVGCOMPONENTS)
	$(CPP) -D$(V) $(INCPATH) -DMOODLE $< | $(SED) | $(TOMOODLE) -I$(HTMLDIR) -I$(ENCODEDDIR) -$V > $@

$(HTMLDIR)/waitqueue.html: waitqueue.html $(STYLESHTML) $(SVGCOMPONENTS)
	$(CPP) -D$(V) $(INCPATH) $< | $(SED) > $@

$(MOODLEDIR)/shorcutkey.svg: shorcutkey.html $(STYLESMOODLE) $(SVGCOMPONENTS)
	$(CPP) -D$(V) $(INCPATH) -DMOODLE $< | $(SED) | $(TOMOODLE) -I$(HTMLDIR) -I$(ENCODEDDIR) -$V > $@

$(HTMLDIR)/shorcutkey.html: shorcutkey.html $(STYLESHTML) $(SVGCOMPONENTS)
	$(CPP) -D$(V) $(INCPATH) $< | $(SED) > $@

$(HTMLDIR)/index.html: index.html
	sed 's/HTML\///' $< > $@

#
# Images
#
$(HTMLDIR)/1401-2-A.jpg: $(IMAGEDIR)/1401-2-A.jpg
	cp -a $< $@

$(ENCODEDDIR)/1401-2-A.b64: $(IMAGEDIR)/1401-2-A.jpg
	sh $(TOBASE64)  $< > $@

$(HTMLDIR)/1502-A.jpg: $(IMAGEDIR)/1502-A.jpg
	cp -a $< $@

$(ENCODEDDIR)/1502-A.b64: $(IMAGEDIR)/1502-A.jpg
	sh $(TOBASE64)  $< > $@

$(HTMLDIR)/1503-A.jpg: $(IMAGEDIR)/1503-A.jpg
	cp -a $< $@

$(ENCODEDDIR)/1503-A.b64: $(IMAGEDIR)/1503-A.jpg
	sh $(TOBASE64)  $< > $@

$(HTMLDIR)/1-2-9.png: $(IMAGEDIR)/1-2-9.png
	cp -a $< $@

$(ENCODEDDIR)/1-2-9.b64: $(IMAGEDIR)/1-2-9.png
	sh $(TOBASE64)  $< > $@

$(HTMLDIR)/sd-formula175.png: $(IMAGEDIR)/sd-formula175.png
	cp -a $< $@

$(ENCODEDDIR)/sd-formula175.b64: $(IMAGEDIR)/sd-formula175.png
	sh $(TOBASE64)  $< > $@

$(HTMLDIR)/formula_sd.png: $(IMAGEDIR)/formula_sd.png
	cp -a $< $@

$(ENCODEDDIR)/formula_sd.b64: $(IMAGEDIR)/formula_sd.png
	sh $(TOBASE64)  $< > $@

$(HTMLDIR)/arraybox.png: $(IMAGEDIR)/arraybox.png
	cp -a $< $@

$(ENCODEDDIR)/arraybox.b64: $(IMAGEDIR)/arraybox.png
	sh $(TOBASE64)  $< > $@

$(HTMLDIR)/varboxt.png: $(IMAGEDIR)/varboxt.png
	cp -a $< $@

$(ENCODEDDIR)/varboxt.b64: $(IMAGEDIR)/varboxt.png
	sh $(TOBASE64)  $< > $@

$(HTMLDIR)/rei-ittei.gif: $(IMAGEDIR)/rei-ittei.gif
	cp -a $< $@

$(ENCODEDDIR)/rei-ittei.b64: $(IMAGEDIR)/rei-ittei.gif
	sh $(TOBASE64)  $< > $@

$(HTMLDIR)/rei-random.gif: $(IMAGEDIR)/rei-random.gif
	cp -a $< $@

$(ENCODEDDIR)/rei-random.b64: $(IMAGEDIR)/rei-random.gif
	sh $(TOBASE64)  $< > $@

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
	rm -fr $(HTMLDIR)/* $(MOODLEDIR)/* $(ENCODEDDIR)/*.b64
