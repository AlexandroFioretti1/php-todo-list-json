const { createApp } = Vue;

createApp({
  data() {
    return {
      tasks: [],
      ContenutoNewTask: "",
      takeTask: "./takeTask.php",
    };
  },
  methods: {
    SendNewTask() {
      this.tasks.push({
        daFare: this.ContenutoNewTask,
        completato: "false",
      });
    },
  },
  mounted() {
    axios.get(this.takeTask).then((response) => {
      this.tasks = response.data;
    });
  },
}).mount("#app");
