<template>
    <div class="modal-overlay" v-if="visible">
      <div class="modal-container">
        <div class="modal-header">
          <h3>{{ title }}</h3>
        </div>
        <div class="modal-body">
          <slot></slot>
        </div>
        <div class="modal-footer">
          <button class="confirm" @click="confirmAction">{{ confirmButtonText }}</button>
          <button @click="closeModal">Cancel</button>
        </div>
      </div>
    </div>
  </template>
  
  <script>
  export default {
    props: {
      visible: {
        type: Boolean,
        required: true,
      },
      title: {
        type: String,
        default: 'Confirm Action',
      },
      confirmButtonText: {
        type: String,
        default: 'Confirm',
      },
    },
    methods: {
      closeModal() {
        this.$emit('close');
      },
      confirmAction() {
        this.$emit('confirm');
      },
    },
  };
  </script>
  
  <style scoped>
  .modal-overlay {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba(0, 0, 0, 0.6);
    display: flex;
    justify-content: center;
    align-items: center;
  }
  
  .modal-container {
    background: white;
    padding: 20px;
    border-radius: 8px;
    width: 400px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
  }
  
  .modal-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
  }
  
  .modal-body {
    margin: 20px 0;
  }
  
  .modal-footer {
    display: flex;
    justify-content: flex-end;
    gap: 10px;
  }
  
button {
  width:   100%;
  padding:   10px;
  background-color: var(--TeaGreen);
  color: white;
  border: none;
  border-radius:   5px;
  cursor: pointer;
  transition: background-color   0.3s ease;
}

button:hover {
  background-color: var(--ShinyShamrock);
}
  </style>
  