function formatAP (data,type) { if (type === 'display') return data ? data+'&nbsp;AP' : null; else return data; }
function formatP (data,type) { if (type === 'display') return data ? data+'%' : null; else return data; }
function formatHP (data,type) { if (type === 'display') return data ? data+'&nbsp;HP' : null; else return data; }
function formatXP (data,type) { if (type === 'display') return data ? data+'&nbsp;XP' : null; else return data; }

function openTable(table,tr) {
    $('#'+tr.id).toggleClass('border');
    table.fnOpen(tr,'<table>'+unescape(tr.getAttribute('data-drop'))+'</table>','details');
}

function closeTable(table,tr) {
    $('#'+tr.id).toggleClass('border');
    table.fnClose(tr);
}

function openHash(){
	var hash = window.location.hash;
	if (hash) {
		var tr = document.getElementById(hash.slice(1));
		var table = window['oTable'+tr.parentNode.parentNode.id.slice(0,-1)];
		openTable(table,tr);
	}
}