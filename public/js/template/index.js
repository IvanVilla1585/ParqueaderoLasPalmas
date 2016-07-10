
class Template {

  constructor() {
    this.info_facebook = $('#info_facebook')
  }

  obtenerTemplate () {
    return `<div class="data">
        <a href=":url:" target="_blanck">
          <figure>
            <img src=":img:" alt="">
          </figure>
        </a>
        <p class="info_message">:message:</p>
      </div>`
  }

  llenarTemplate (data) {
    let template_info = this.obtenerTemplate()
        .replace(':url:', 'https://www.facebook.com/Parqueadero-las-palmas-J-M-' + data.id)
        .replace(':img:', data.picture ? data.picture : '')
        .replace(':message:', data.message)
    let $article = $(template_info)
    this.info_facebook.append($article.fadeIn(1500))
  }
}

export default Template
