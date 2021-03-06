export default (props) => {
  const t = new Table(props.table);
  //--- Set Title
  window.document.title = t.getTableAlias();
  //--- Mark actual Link
  document.querySelectorAll('#sidebar-links .list-group-item').forEach(link => {
    link.classList.remove('active');
    if (link.getAttribute('href') === '#/'+t.getTablename())
      link.classList.add('active');
  });
  // Execute Javascript if its a virtual Page (i.e. Dashboard)
  if (t.Config.is_virtual)
    return eval('(function() {' + t.Config.virtualcontent + '}())') || '';
  //--- Table (Settings + Load Rows)
  t.options.showSearch = true;
  t.options.showWorkflowButton = true;
  t.options.showCreateButton = true;
  t.loadRows(()=>{
    const container = document.getElementById('tablecontent') || document.getElementById('formcontent');
    t.renderHTML(container);
  });
  //----------------------------
  return `<div id="tablecontent"></div>`;
}