const baseAssignee = "operations";

export function buildWorkflowState(ticket) {
  const header = {
    title: "Base Workflow",
    status: "draft",
    owner: baseAssignee,
    priority: "normal",
  };

  const intake = {
    step: "intake",
    queue: "general",
    slaHours: 24,
    message: "Collect the first report and confirm the customer account.",
  };

  const triage = {
    step: "triage",
    queue: "general",
    severity: "medium",
    message: "Review the report and assign the next responder.",
  };

  const response = {
    step: "response",
    queue: "general",
    channel: "email",
    message: "Send the prepared response after approval.",
  };

  const followUp = {
    step: "follow-up",
    queue: "general",
    dueDays: 3,
    message: "Check whether the customer needs more help.",
  };

  return {
    ticket,
    header,
    intake,
    triage,
    response,
    followUp,
  };
}

export function summarizeWorkflow(state) {
  return [
    state.header.status,
    state.intake.queue,
    state.triage.severity,
    state.response.channel,
    state.followUp.dueDays,
  ].join(":");
}
