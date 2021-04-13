<script text/script="javascript">
var curpname ='';
var cursubpname = '';
var curbtn;
var cursubbtns = [];
var defbtncolor = null;
var defbtnbgcolor = null;
var defsubbtncolor = null;
var defsubbtnbgcolor = null;
var pagename = 'feaux';
var subpagename = 'feaux';

function setpagename(apage, asubpage)
{
  pagename = apage;
  subpagename = asubpage;
}

function changepage(tNameSelf, tNameNext)
{
  tMenu = document.all[tNameSelf].style.display = "none";
  tMenu = document.all[tNameNext].style.display = "block";
  curpname = tNaneNext;
}
function disppage(tChap, tQ)
{
  var tChaps, tQs;
  tChaps = (tChap < 10) ? '0' + tChap : '' +tChap;
  tQs = (tQ < 10) ? '0' + tQ : '' + tQ;
  idname = tChaps + '_' + tQs;
  tNameSelf = pagename + idname;
  if (curpname != '') {
      tMenu = document.all[curpname];
      if (tMenu != null) {
          tMenu.style.display = "none";
      }
  }
  tMenu = document.all[tNameSelf];
  if (tMenu != null) {
      tMenu.style.display = "block";
  }
  curpname = tNameSelf;

  if (curbtn != null) {
    curbtn.style.color = defbtncolor;
    curbtn.style.backgroundColor = defbtnbgcolor;
  }
  var btn = document.all['B' + idname];
  if (btn != null) {
    if (curbtn == null && defbtncolor == null) {
      defbtncolor = btn.style.color;
      defbtnbgcolor = btn.style.backgroundColor;
    }
    btn.style.color = "white";
    btn.style.backgroundColor = "black";
    curbtn = btn;
  }
}
function dispsubpage(tChap, tQ, tN)
{
  var tChaps, tQs, tNs;
  tChaps = (tChap < 10) ? '0' + tChap : '' + tChap;
  tQs = (tQ < 10) ? '0' + tQ : '' + tQ;
  tNs = (tN < 10) ? '0' + tN : '' + tN;
  var pid = tChaps + '_' + tQs + '_' + tNs;
  var subdiv = subpagename + pid;
  if (cursubpname != '') {
    if (cursubpname == subdiv) {
        return;
    }
    tMenu = document.all[cursubpname].style.display = "none";
  }
  tMenu = document.all[subdiv].style.display = "block";
  cursubpname = subdiv;

  var cursubbtn = cursubbtns[tQ];
  if (cursubbtn != null && defsubbtncolor == null) {
     cursubbtn.style.color = defsubbtncolor;
     cursubbtn.style.backgroundColor = defsubbtnbgcolor;
  }
  var subbtnid = "B" + pid;
  var subbtn = document.all[subbtnid];
  if (subbtn != null) {
    subbtn.style.color = "white";
    subbtn.style.backgroundColor = "red";
    cursubbtns[tQ] = subbtn;
  }
}

var onlist = [];

function detailson(qlist)
{
     var n;
     var t;
     var s;
     var x;

     x = 0;
     n = onlist.length;
     for (var i = 0; i < n; i++) {
        var s = onlist[i];
        if (s == qlist) {
            t = document.all[qlist];
            if (t != null) {
                t.style.display = 'none';
            }
            onlist.splice(i, 1);
            x = 1;
            break;
        }
     }
     if (x == 0) {
        t = document.all[qlist];
        if (t != null) {
            onlist.push(qlist);
            t.style.display = 'block';
        }
     }
}
</script>
