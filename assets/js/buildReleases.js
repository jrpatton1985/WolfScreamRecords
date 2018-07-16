var modal = d3.select(".modal");
var modalBody = d3.select('.modal-body');
var closeBtn = d3.select('.close')
                 .on('click', function() {
                   modal.style('display', 'none');
                 });

var placeHolder = '../assets/img/handtinytrans.gif';
var selection = d3.select('.grid')
                  .selectAll('.cell')
                  .data(releaseData)
                  .enter()
                  .append('div')
                    .classed('cell', true)
                    .html( d => `
                        <img src="${placeHolder}" data-src="${d.cover}" class="responsive-image b-lazy">
                      `)
                    .on('click', displayModalBody);

function displayModalBody(d) {
    var bpUrl = 'https://www.beatport.com/release/';
    var tsUrl = 'https://www.traxsource.com/title/';
    var spUrl = 'https://open.spotify.com/';
    var scUrl = 'https://soundcloud.com/wolf-scream-records/'

    // separate new lines (\n) into paragraphs
    var blurby = d.blurb.split('\n').join(`</p><p>`);

    modalBody
      .html(`
          <img class="modal-img" src="${d.cover}" />
          <h1 class="title">${d.title}</h1>
          <h2 class="artist">${d.artist}</h2>
          <h4 class="rDate">${d.catalog} | ${d.release}</h4>
          <ol class="tracks">
            ${d.tracks.map((track) => `<li><span style="font-weight: bold;">${track.name}</span> <span style="font-size: 0.9em; opacity:0.7;">(${track.mix})</span></li>`).join('')}
          </ol>
          <div class="blurbs">
            <p>${blurby}</p>
          </div>
          <ul>
            ${d.bp ? `<li><a class="button beatport" href="${bpUrl}${d.bp}" target="_blank"><img src="../assets/img/bp_logo.png"></a></li>` : ''}
            ${d.ts ? `<li><a class="button traxsource" href="${tsUrl}${d.ts}" target="_blank"><img src="../assets/img/ts_logo.png"></a></li>` : ''}
            ${d.sc ? `<li><a class="button soundcloud" href="${scUrl}${d.sc}" target="_blank"><i class="fa fa-soundcloud fa-3x"></i></a></li>` : ''}
            ${d.spotify ? `<li><a class="button spotify" href="${spUrl}${d.spotify}" target="_blank"><i class="fa fa-spotify fa-3x"></i></a></li>` : ''}
          </ul>
        `);
    modal.style('display', 'block');
}

// Because I'm fairly terrible with D3
var myModal = document.getElementById('myModal');
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == myModal) {
        modal
          .style('display', 'none');
    }
}
