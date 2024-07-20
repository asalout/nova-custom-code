<template>
    <button @click.prevent="openModal" type="button" class="shrink-0 h-9 px-4 focus:outline-none ring-primary-200 dark:ring-gray-600 focus:ring text-white dark:text-gray-800 inline-flex items-center font-bold shadow rounded focus:outline-none ring-primary-200 dark:ring-gray-600 focus:ring bg-primary-500 hover:bg-primary-400 active:bg-primary-600 text-white dark:text-gray-800 inline-flex items-center font-bold px-4 h-9 text-sm shrink-0 h-9 px-4 focus:outline-none ring-primary-200 dark:ring-gray-600 focus:ring text-white dark:text-gray-800 inline-flex items-center font-bold">
        <span class="hidden md:inline-block">{{ buttonLabel }}</span>
    </button>
    <Modal
        :show="showModal"
        tabindex="-1"
        role="dialog"
        @click.native="closeModal"
        size="7xl"
    >
        <form
            ref="theForm"
            autocomplete="off"
            class="bg-white dark:bg-gray-800"
            :class="'rounded-lg shadow-lg overflow-hidden space-y-6 flex flex-col justify-between h-full'"
        >
            <div
                class="space-y-6"
                :class="'overflow-hidden overflow-y-auto'"
            >
                <ModalHeader v-text="field.name" />

                <!-- Action Fields -->
                <div class="modal-form-row">
                    <component
                        :is="`detail-code-field`"
                        :field="field"
                    />
                </div>
            </div>
            <ModalFooter>
                <div class="flex items-center ml-auto">
                    <CancelButton
                        component="button"
                        type="button"
                        dusk="cancel-action-button"
                        class="ml-auto mr-3"
                        @click.prevent="closeModal"
                    >
                       Cancel
                    </CancelButton>
                </div>
            </ModalFooter>
        </form>
    </Modal>
</template>

<script>
export default {
  props: ['field'],
  data() {
    return {
        showModal: false,
    }
  },
  computed: {
    fieldValue() {
      return this.field.displayedAs || this.field.value
    },
      buttonLabel() {
          return this.field.button_label
      },
  },
  methods: {
      openModal() {
          this.showModal = true;
          return false;
      },
      closeModal() {
          this.showModal = false
      }
  }
}
</script>

<style>
.modal-form-row {
    margin-left: 1.5rem;
    margin-right: 1.5rem;
}
</style>
