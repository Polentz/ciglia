panel.plugin("ciglia/blocks", {
  blocks: {
    maintext: {
      computed: {
        placeholder() {
          return "Testo principale ...";
        }
      },
      template: `
        <div>
          <p>
            <k-writer
              v-bind="field('maintext')"
              :value="content.maintext"
              @input="update({ maintext: $event })">
            </k-writer>
          </p>
        </div>
      `
    },
    subtext: {
      computed: {
        placeholder() {
          return "Testo secondario ...";
        }
      },
      template: `
        <div>
          <p>
            <k-writer
              v-bind="field('subtext')"
              :value="content.subtext"
              @input="update({ subtext: $event })">
            </k-writer>
          </p>
        </div>
      `
    },
    buttons: {
      template: `
        <div class="buttons">
          <div v-for="item in content.blocks" class="button-wrapper">
            <ul class="button">
              <li v-html="item.content.text"></li>
            </ul>
          </div>
        </div> 
      `
    },
    link: {
      computed: {
        placeholder() {
          return "Testo del pulsante ...";
        }
      },
      template: `
      <input
        type="text"
        :placeholder="placeholder"
        :value="content.text"
        @input="update({ text: $event.target.value })"
      />
      `
    },
    download: {
      computed: {
        placeholder() {
          return "Testo del pulsante ...";
        }
      },
      template: `
        <input
          type="text"
          :placeholder="placeholder"
          :value="content.text"
          @input="update({ text: $event.target.value })"
        />
      `
    },
    special: {
      computed: {
        placeholder() {
          return "Testo del pulsante ...";
        }
      },
      template: `
      <input
        type="text"
        :placeholder="placeholder"
        :value="content.text"
        @input="update({ text: $event.target.value })"
      />
      `
    },
  }
});