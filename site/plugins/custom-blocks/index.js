panel.plugin("ciglia/blocks", {
  blocks: {
    maintext: {
      computed: {
        placeholder() {
          return "Testo ...";
        }
      },
      template: `
        <div>
          <p>
            <k-writer
              v-bind="field('maintext')"
              :placeholder="placeholder"
              :value="content.maintext"
              @input="update({ maintext: $event })">
            </k-writer>
          </p>
        </div>
      `
    },
    title: {
      computed: {
        placeholder() {
          return "Titolo ...";
        }
      },
      template: `
        <input
          type="text"
          :placeholder="placeholder"
          :value="content.title"
          @input="update({ title: $event.target.value })"
        />
      `
    },
    accordion: {
      computed: {
        placeholder() {
          return "Esercizio ...";
        }
      },
      template: `
      <div class="accordion">
        <input
          type="text"
          :placeholder="placeholder"
          :value="content.header"
          @input="update({ header: $event.target.value })"
        />
        <div class="accordion-content">
          <p>
            <k-writer
              v-bind="field('body')"
              :value="content.body"
              @input="update({ body: $event })">
            </k-writer>
          </p>
        </div>
      </div>
      `
    },
    audiobutton: {
      computed: {
        placeholder() {
          return "Ascolto ...";
        }
      },
      template: `
        <input
          type="text"
          :placeholder="placeholder"
          :value="content.audiotitle"
          @input="update({ audiotitle: $event.target.value })"
        />
      `
    },
  }
});