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
          return "Nome esercizio ...";
        }
      },
      template: `
      <div class="accordion">
        <input
          type="text"
          :placeholder="placeholder"
          :value="content.header"
          @input="update({ text: $event.target.value })"
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
          :value="content.title"
          @input="update({ title: $event.target.value })"
        />
      `
    },
  }
});